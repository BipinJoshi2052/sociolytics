<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Message;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ChatController extends Controller
{
    public function index(){
        // Get the logged-in user's ID
        $userId = Auth::id();
    
        // Retrieve messages where friend_id or user_id is the logged-in user's ID
        $messages = Message::where('user_id', $userId)
                            ->orWhere('friend_id', $userId)
                            ->orderBy('created_at', 'desc')
                            ->get()
                            ->groupBy(function($message) use ($userId) {
                                return $message->user_id == $userId ? $message->friend_id : $message->user_id;
                            });
        
        // dd($messages->toArray());
        // Convert the created_at to Kathmandu timezone and sort each message group by created_at in descending order
        $sortedMessages = $messages->map(function ($group) {
            return $group->map(function ($message) {
                $message->created_at = convertTimezone('Asia/Kathmandu', $message->created_at);
                return $message;
            })->sortByDesc('created_at');
        });

        // Fetch the friend details using the grouped friend IDs
        $friendIds = $sortedMessages->keys();
        $friends = User::whereIn('id', $friendIds)->get()->keyBy('id');
        $friendDetails = UserDetail::whereIn('user_id', $friendIds)->get()->keyBy('user_id');

        // Prepare the data for the view
        $chatData = $sortedMessages->map(function ($messages, $friendId) use ($friends, $friendDetails) {
            $friendName = $friends[$friendId]->name ?? 'Unknown';
            $friendImage = $friendDetails[$friendId]->image ?? asset('/images/user/1.jpg');

            return [
                'friend_id' => $friendId,
                'friend_name' => $friendName,
                'friend_image' => asset('/images/user/'.$friendDetails[$friendId]->image),
                'conversations' => $messages->toArray()
            ];
        });
        // dd($chatData->toArray());
        // Pass the grouped messages to the view
        return view('chat.index',[
            'messages' => $chatData,
        ]);
    }

    public function sendMessage(Request $request){
        try {
            $validatedData = $request->validate([
                'friend_id' => 'required|integer',
                'message' => 'required|string'
            ]);
        
            $message = new Message();
            $message->user_id = auth()->id();
            $message->friend_id = $validatedData['friend_id'];
            $message->message = $validatedData['message'];
            $message->save();

            return response()->json(['message' => 'Message Sent'], 200);
        } catch (ValidationException $e) {
            // If a validation error occurs, catch the ValidationException
            // and redirect back with the validation error messages
            return response()->json(['message' => $e->validator->getMessageBag()], 500);
        } catch (Exception $e) {
            // If any other type of exception occurs, catch it and
            // redirect back with the exception message
            return response()->json(['message' => $e->getMessage()], 500);
        }
    
    }
}
