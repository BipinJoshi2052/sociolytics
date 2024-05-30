$(document).ready(function () {
  
    function scrollToBottom(selector) {
        var element = $(selector);
        element.scrollTop(element.prop("scrollHeight"));
    }

    $('#chat-search').on('keyup', function () {
        var value = $(this).val().toLowerCase();
        $('#chat-list .chat-item').filter(function () {
            $(this).toggle($(this).find('.chat-sidebar-name h6').text().toLowerCase().indexOf(value) > -1);
        });
    });

    $('.sendChat').on('click', function (e) {
        e.preventDefault();

        var $this = $(this);
        var messageClass = $this.data('message-class');
        var chatBox = $this.data('chat-box');
        var textarea = $('.' + messageClass);
        var chatMessage = textarea.val();
        var friendId = $this.data('friend-id');
        scrollToBottom('.friend-chatbox-' + friendId);
        // var userImage = '{{$userImage}}';
        // console.log(userImage);

        if (textarea.val().trim() === '') {
            return; // Do nothing if the textarea is empty
        }

        var updateData = {
            'message': chatMessage,
            'friend_id': friendId,
        };
        $.ajax({
            url: "send-message",
            type: "POST",
            contentType: 'application/json',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: JSON.stringify(updateData),
            success: function (response) {
                //toastr.success(response.message);

                var chatHtml = `
                   <div class="chat d-flex other-user">
                         <div class="chat-user">
                            <a class="avatar m-0">
                               <img src="${userImage}" alt="avatar" class="avatar-35">
                            </a>
                            <span class="chat-time mt-1">${response.data.sent_time}</span>
                         </div>
                         <div class="chat-detail">
                            <div class="chat-message">
                               <p>${response.data.message}</p>
                            </div>
                         </div>
                   </div>
                `;

                $('.' + chatBox).append(chatHtml);
                textarea.val(''); // Clear the textarea
            },
            error: function (xhr, status, error) {
                toastr.error('An error occurred while sending the message.');
            }
        });
    });

    //realtime chat message checking

    $('.friend-message-box').on('click', function(e) {
        // e.preventDefault();

        // Get friend ID from the clicked anchor tag
        var friendId = $(this).data('friend-id');
        scrollToBottom('.friend-chatbox-' + friendId);

        // Get the chatbox ID from the href attribute of the clicked anchor tag
        var chatBoxId = $(this).attr('href').substring(1);
        var lastMessageId = $('#' + chatBoxId + ' .chat:last').data('message-id');
        var friendImage = $('#' + chatBoxId + ' .chat:last').data('friend-image');

        // console.log(chatBoxId);
        // console.log(friendId);
        // console.log(lastMessageId);
        setInterval(function(){
            var updateData = {
                'friend_id': friendId,
                'last_message_id': lastMessageId,
            };
            // Run AJAX to check for messages
            $.ajax({
                url: 'check-message',
                type: 'POST',
                contentType: 'application/json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                data: JSON.stringify(updateData),
                success: function(response) {
                    // console.log(response);
                    if (response.data && response.data.length > 0) {    
                        // If no messages, show "Typing..." message for 2 seconds
                        var typingHtml = `<div class="typing-indicator">Typing...</div>`;
                        $('.friend-chatbox-' + friendId).append(typingHtml);

                        setTimeout(function() {
                            $('#' + chatBoxId + ' .typing-indicator').remove();
                            response.data.forEach(function(message) {
                                var chatHtml = `
                                <div data-friend-image="${friendImage}" data-message-id="${message.id}" class="chat chat-left">
                                    <div class="chat-user">
                                        <a class="avatar m-0">
                                        <img src="${friendImage}" alt="avatar" class="avatar-35">
                                        </a>
                                        <span class="chat-time mt-1">${message.sent_time}</span>
                                    </div>
                                    <div class="chat-detail">
                                        <div class="chat-message">
                                        <p>${message.message}</p>
                                        </div>
                                    </div>
                                </div>
                                `;
        
                                $('.friend-chatbox-' + friendId).append(chatHtml);
                                scrollToBottom('.friend-chatbox-' + friendId);
                                lastMessageId = message.id;
                            }); 
                        }, 1000);
                    // console.log(lastMessageId);
                    } 
                    else {
                    }
                },
                error: function(error) {
                    console.log('Error fetching messages:', error);
                }
            });

        },2000)
    });

    //realtime chat message checking
});