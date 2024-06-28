@extends('layout')
@section('styles')
<style>

.avatar-60 {
    width: 60px;
    height: 55px;
    border-radius: 50%;
    object-fit: cover;
}

.user-img {
    width: 60px;
    height: 55px;
    overflow: hidden;
    border-radius: 50%;
}

</style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8 row m-0 p-0">
            <div class="col-sm-12">
                <div id="post-modal-data" class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Create Post</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="width: 60px; height: 55px; overflow: hidden; border-radius:50%;">
                                @if($profilePicture && $profilePicture->file_path)
                                <img src="{{ Storage::url($profilePicture->file_path) }}" alt="profile-img" class="avatar-60 img-fluid rounded-circle" style="width: 60px; height: 55px; border-radius: 50%; object-fit: cover;"/>
                                @else
                                <img src="{{ asset('/images/template/user/11.png') }}" alt="profile-img" class="avatar-60 img-fluid rounded-circle" style="width: 60px; height: 55px; border-radius: 50%; object-fit: cover;" />
                                @endif

                            </div>
                            <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#post-modal"
                                action="javascript:void();">
                                <input type="text" class="form-control rounded" placeholder="Write something here..."
                                    style="border:none;">
                            </form>
                        </div>
                        <hr>
                        <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#post-modal"
                        action="javascript:void();">
                        <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                            <li class="me-3 mb-md-0 mb-2">
                                <a href="#" class="btn btn-soft-primary">
                                    <img src="{{ asset('/images/template/small/07.png') }}" alt="icon" class="img-fluid me-2">
                                    Photo
                                </a>
                            </li>
                            {{-- <li class="me-3 mb-md-0 mb-2">
                                <a href="#" class="btn btn-soft-primary">
                                    <img src="{{ asset('/images/template/small/08.png') }}" alt="icon" class="img-fluid me-2">
                                    Tag Friend
                                </a>
                            </li> --}}
                            {{-- <li class="me-3">
                                <a href="#" class="btn btn-soft-primary">
                                    <img src="{{ asset('/images/template/small/09.png') }}" alt="icon" class="img-fluid me-2">
                                    Feeling/Activity
                                </a>
                            </li> --}}
                            {{-- <li>
                                <button class="btn btn-soft-primary">
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle" id="post-option" data-bs-toggle="dropdown">
                                                <i class="ri-more-fill"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option"
                                                style="">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#post-modal">Check in</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#post-modal">Live Video</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#post-modal">Gif</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#post-modal">Watch Party</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#post-modal">Play with Friend</a>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </li> --}}
                        </ul>
                    </form>
                    </div>
                    <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel" aria-hidden="true">
                        <div class="modal-dialog   modal-fullscreen-sm-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                            class="ri-close-fill"></i></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('postStore')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="width: 60px; height: 55px; overflow: hidden; border-radius:50%;">
                                                @if($profilePicture && $profilePicture->file_path)
                                                <img src="{{ Storage::url($profilePicture->file_path) }}" alt="profile-img" class="avatar-60 img-fluid rounded-circle" style="width: 60px; height: 55px; border-radius: 50%; object-fit: cover;"/>
                                                @else
                                                <img src="{{ asset('/images/template/user/11.png') }}" alt="profile-img" class="avatar-60 img-fluid rounded-circle" style="width: 60px; height: 55px; border-radius: 50%; object-fit: cover;"/>
                                                @endif
                                            </div>
                                            {{-- <form class="post-text ms-3 w-100" action="javascript:void();"> --}}
                                                <input type="text" class="form-control rounded" name="description"
                                                    placeholder="Write something here..." style="border:none;">
                                            {{-- </form> --}}
                                        </div>
                                        <div id="image-preview" style="margin-top: 10px;"></div>
                                        <hr>
                                        <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">


                                            <li class="col-md-6 mb-3">
                                                <div class="bg-soft-primary rounded p-2 pointer me-3">
                                                   Schedule Post : <input type="date" name="set_time">
                                            </li>
                                            <li class="col-md-6 mb-3">
                                                <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                        href="#"></a><img src="{{ asset('/images/template/small/07.png') }}"
                                                        alt="icon" class="img-fluid"><label for="image"> Photo
                                                        <input type="file" id="image" name="image[]" multiple style="display: none;"  >
                                                    </label>
                                                    </div>
                                            </li>
                                            {{-- <li class="col-md-6 mb-3">
                                                <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                        href="#"></a><img src="{{ asset('/images/template/small/08.png') }}"onchange="previewImage(event)"
                                                        alt="icon" class="img-fluid"> Tag Friend</div>
                                            </li>
                                            {{-- <li class="col-md-6 mb-3">
                                                <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                        href="#"></a><img src="{{ asset('/images/template/small/09.png') }}"
                                                        alt="icon" class="img-fluid"> Feeling/Activity</div>
                                            </li>
                                            <li class="col-md-6 mb-3">
                                                <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                        href="#"></a><img src="{{ asset('/images/template/small/10.png') }}"
                                                        alt="icon" class="img-fluid"> Check in</div>
                                            </li>
                                            <li class="col-md-6 mb-3">
                                                <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                        href="#"></a><img src="{{ asset('/images/template/small/11.png') }}"
                                                        alt="icon" class="img-fluid"> Live Video</div>
                                            </li>
                                            <li class="col-md-6 mb-3">
                                                <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                        href="#"></a><img src="{{ asset('/images/template/small/12.png') }}"
                                                        alt="icon" class="img-fluid"> Gif</div>
                                            </li>
                                            <li class="col-md-6 mb-3">
                                                <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                        href="#"></a><img src="{{ asset('/images/template/small/13.png') }}"
                                                        alt="icon" class="img-fluid"> Watch Party</div>
                                            </li>
                                            <li class="col-md-6 mb-3">
                                                <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                        href="#"></a><img src="{{ asset('/images/template/small/14.png') }}"
                                                        alt="icon" class="img-fluid"> Play with Friends</div>
                                            </li> --}}
                                        </ul>
                                        {{-- <hr>
                                        <div class="other-option">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-img me-3">
                                                        <img src="{{ asset('/images/template/user/Noprofile.jpg') }}" alt="userimg"
                                                            class="avatar-60 rounded-circle img-fluid">
                                                    </div>
                                                    <h6>Your Story</h6>
                                                </div>
                                                <div class="card-post-toolbar">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            <span class="btn btn-primary">Friend</span>
                                                        </span>
                                                        <div class="dropdown-menu m-0 p-0">
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <i class="ri-save-line h4"></i>
                                                                    <div class="data ms-2">
                                                                        <h6>Public</h6>
                                                                        <p class="mb-0">Anyone on or off Facebook</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <i class="ri-close-circle-line h4"></i>
                                                                    <div class="data ms-2">
                                                                        <h6>Friends</h6>
                                                                        <p class="mb-0">Your Friend on facebook</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <i class="ri-user-unfollow-line h4"></i>
                                                                    <div class="data ms-2">
                                                                        <h6>Friends except</h6>
                                                                        <p class="mb-0">Don't show to some friends</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                                <div class="d-flex align-items-top">
                                                                    <i class="ri-notification-line h4"></i>
                                                                    <div class="data ms-2">
                                                                        <h6>Only Me</h6>
                                                                        <p class="mb-0">Only me</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            @foreach($posts as $post)
            <div class="col-sm-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="user-post-data">
                            <div class="d-flex justify-content-between">
                                <div class="me-3 user-img" style="width: 60px; height: 55px; overflow: hidden; border-radius:50%;">
                                    @if($post->user->profilePicture && $post->user->profilePicture->file_path)
                                        <img src="{{ Storage::url($post->user->profilePicture->file_path) }}" alt="profile-img" class="avatar-60 img-fluid rounded-circle" style="width: 60px; height: 55px; border-radius: 50%; object-fit: cover;" />
                                    @else
                                        <img src="{{ asset('/images/template/user/11.png') }}" alt="profile-img" class="avatar-60 img-fluid rounded-circle" style="width: 60px; height: 55px; border-radius: 50%; object-fit: cover;" />
                                    @endif
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <h5 class="mb-0 d-inline-block">{{ $post->user->name }}</h5>
                                            <span class="mb-0 d-inline-block">Add New Post</span>
                                            <p class="mb-0 text-primary">{{ $post->created_at->format('d M Y, H:i') }}</p>
                                        </div>
                                        <div class="card-post-toolbar">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" role="button">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu m-0 p-0">
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <div class="h4">
                                                                <i class="ri-save-line"></i>
                                                            </div>
                                                            <div class="data ms-2">
                                                                <h6>Save Post</h6>
                                                                <p class="mb-0">Add this to your saved items</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Hide Post</h6>
                                                                <p class="mb-0">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-user-unfollow-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Unfollow User</h6>
                                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-notification-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Notifications</h6>
                                                                <p class="mb-0">Turn on notifications for this post</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>{{ $post->description }}</p>
                        </div>
                        @if($post->images->count())

                        <div class="user-post">
                            <div class=" d-grid grid-rows-2 grid-flow-col gap-3">
                                <div class="row-span-2 row-span-md-1">
                                    @foreach($post->images as $image)
                                    <img src="{{ asset(Storage::url($image->file_path)) }}" class="img-fluid mb-2">
                                @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="comment-area mt-3">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="like-block position-relative d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="like-data">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" role="button">
                                                    <img src="{{ asset('/images/template/icon/01.png') }}" class="img-fluid"
                                                        alt="">
                                                </span>
                                                <div class="dropdown-menu py-2">
                                                    <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Like"><img
                                                            src="{{ asset('/images/template/icon/01.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Love"><img
                                                            src="{{ asset('/images/template/icon/02.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Happy"><img
                                                            src="{{ asset('/images/template/icon/03.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="HaHa"><img
                                                            src="{{ asset('/images/template/icon/04.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Think"><img
                                                            src="{{ asset('/images/template/icon/05.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Sade"><img
                                                            src="{{ asset('/images/template/icon/06.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Lovely"><img
                                                            src="{{ asset('/images/template/icon/07.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="total-like-block ms-2 me-3">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" role="button">
                                                    150 Likes
                                                </span>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Max Emum</a>
                                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                                    <a class="dropdown-item" href="#">Other</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total-comment-block">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" role="button">
                                                20 Comment
                                            </span>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                    <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                        aria-controls="share-btn"><i class="ri-share-line"></i>
                                        <span class="ms-1">99 Share</span></a>
                                </div>
                            </div>
                            <hr>
                            <ul class="post-comments list-inline p-0 m-0">
                                <li class="mb-2">
                                    <div class="d-flex">
                                        <div class="user-img">
                                            <img src="{{ asset('/images/template/user/02.jpg') }}" alt="userimg"
                                                class="avatar-35 rounded-circle img-fluid">
                                        </div>
                                        <div class="comment-data-block ms-3">
                                            <h6>Monty Carlo</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                <a href="javascript:void();">like</a>
                                                <a href="javascript:void();">reply</a>
                                                <a href="javascript:void();">translate</a>
                                                <span> 5 min </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="user-img">
                                            <img src="{{ asset('/images/template/user/03.jpg') }}" alt="userimg"
                                                class="avatar-35 rounded-circle img-fluid">
                                        </div>
                                        <div class="comment-data-block ms-3">
                                            <h6>Paul Molive</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                <a href="javascript:void();">like</a>
                                                <a href="javascript:void();">reply</a>
                                                <a href="javascript:void();">translate</a>
                                                <span> 5 min </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                <div class="comment-attagement d-flex">
                                    <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
             <div class="col-sm-12 text-center">
            <img src="{{ asset('/images/template/page-img/page-load-loader.gif') }}" alt="loader" style="height: 100px;">
        </div>
            {{-- <div class="col-sm-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="user-post-data">
                            <div class="d-flex justify-content-between">
                                <div class="me-3">
                                    <img class="rounded-circle img-fluid" src="{{ asset('/images/template/user/02.jpg') }}"
                                        alt="">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <h5 class="mb-0 d-inline-block">Paige Turner</h5>
                                            <p class="mb-0 d-inline-block">Added New Video in his Timeline</p>
                                            <p class="mb-0 text-primary">1 day ago</p>
                                        </div>
                                        <div class="card-post-toolbar">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" role="button">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu m-0 p-0">
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-save-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Save Post</h6>
                                                                <p class="mb-0">Add this to your saved items</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Hide Post</h6>
                                                                <p class="mb-0">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-user-unfollow-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Unfollow User</h6>
                                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-notification-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Notifications</h6>
                                                                <p class="mb-0">Turn on notifications for this post</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo
                                non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed
                                rhoncus</p>
                        </div>
                        <div class="user-post">
                            <div class="ratio ratio-16x9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/OaimMVSKU_U?si=Mm7kfb4WRiXvcTqQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="comment-area mt-3">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="like-block position-relative d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="like-data">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" role="button">
                                                    <img src="{{ asset('/images/template/icon/01.png') }}" class="img-fluid"
                                                        alt="">
                                                </span>
                                                <div class="dropdown-menu py-2">
                                                    <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Like"><img
                                                            src="{{ asset('/images/template/icon/01.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Love"><img
                                                            src="{{ asset('/images/template/icon/02.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Happy"><img
                                                            src="{{ asset('/images/template/icon/03.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="HaHa"><img
                                                            src="{{ asset('/images/template/icon/04.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Think"><img
                                                            src="{{ asset('/images/template/icon/05.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Sade"><img
                                                            src="{{ asset('/images/template/icon/06.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                    <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Lovely"><img
                                                            src="{{ asset('/images/template/icon/07.png') }}" class="img-fluid"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="total-like-block ms-2 me-3">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" role="button">
                                                    140 Likes
                                                </span>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Max Emum</a>
                                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                                    <a class="dropdown-item" href="#">Other</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total-comment-block">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                20 Comment
                                            </span>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                    <a href="javascript:void();" data-bs-toggle="offcanvas"
                                        data-bs-target="#share-btn" aria-controls="share-btn"><i
                                            class="ri-share-line"></i>
                                        <span class="ms-1">99 Share</span></a>
                                </div>
                            </div>
                            <hr>
                            <ul class="post-comments list-inline p-0 m-0">
                                <li class="mb-2">
                                    <div class="d-flex flex-wrap">
                                        <div class="user-img">
                                            <img src="{{ asset('/images/template/user/02.jpg') }}" alt="userimg"
                                                class="avatar-35 rounded-circle img-fluid">
                                        </div>
                                        <div class="comment-data-block ms-3">
                                            <h6>Monty Carlo</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                <a href="javascript:void();">like</a>
                                                <a href="javascript:void();">reply</a>
                                                <a href="javascript:void();">translate</a>
                                                <span> 5 min </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex flex-wrap">
                                        <div class="user-img">
                                            <img src="{{ asset('/images/template/user/03.jpg') }}" alt="userimg"
                                                class="avatar-35 rounded-circle img-fluid">
                                        </div>
                                        <div class="comment-data-block ms-3">
                                            <h6>Paul Molive</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                <a href="javascript:void();">like</a>
                                                <a href="javascript:void();">reply</a>
                                                <a href="javascript:void();">translate</a>
                                                <span> 5 min </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                <div class="comment-attagement d-flex">
                                    <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Friend Request</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="media-story list-inline m-0 p-0">
                        <li class="d-flex mb-3 align-items-center">
                            <i class="ri-add-line"></i>
                            <div class="stories-data ms-3">
                                <h5>Creat Your Story</h5>
                                <p class="mb-0">time to story</p>
                            </div>
                        </li>
                        <li class="d-flex mb-3 align-items-center active">
                            <img src="{{ asset('/images/template/page-img/s2.jpg') }}" alt="story-img"
                                class="rounded-circle img-fluid">
                            <div class="stories-data ms-3">
                                <h5>Anna Mull</h5>
                                <p class="mb-0">1 hour ago</p>
                            </div>
                        </li>
                        <li class="d-flex mb-3 align-items-center">
                            <img src="{{ asset('/images/template/page-img/s3.jpg') }}" alt="story-img"
                                class="rounded-circle img-fluid">
                            <div class="stories-data ms-3">
                                <h5>Ira Membrit</h5>
                                <p class="mb-0">4 hour ago</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="{{ asset('/images/template/page-img/s1.jpg') }}" alt="story-img"
                                class="rounded-circle img-fluid">
                            <div class="stories-data ms-3">
                                <h5>Bob Frapples</h5>
                                <p class="mb-0">9 hour ago</p>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary d-block mt-3">See All</a>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Events</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                            <div class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false" role="button">
                                <i class="ri-more-fill h4"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                style="">
                                <a class="dropdown-item" href="#"><i class="ri-eye-fill me-2"></i>View</a>
                                <a class="dropdown-item" href="#"><i
                                        class="ri-delete-bin-6-fill me-2"></i>Delete</a>
                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill me-2"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="ri-printer-fill me-2"></i>Print</a>
                                <a class="dropdown-item" href="#"><i
                                        class="ri-file-download-fill me-2"></i>Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="media-story list-inline m-0 p-0">
                        <li class="d-flex mb-4 align-items-center ">
                            <img src="{{ asset('/images/template/page-img/s4.jpg') }}" alt="story-img"
                                class="rounded-circle img-fluid">
                            <div class="stories-data ms-3">
                                <h5>Web Workshop</h5>
                                <p class="mb-0">1 hour ago</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="{{ asset('/images/template/page-img/s5.jpg') }}" alt="story-img"
                                class="rounded-circle img-fluid">
                            <div class="stories-data ms-3">
                                <h5>Fun Events and Festivals</h5>
                                <p class="mb-0">1 hour ago</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Friend Suggestion</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="media-story list-inline m-0 p-0">
                        <li class="d-flex mb-4 align-items-center">
                            <img src="{{ asset('/images/template/user/01.jpg') }}" alt="story-img"
                                class="rounded-circle img-fluid">
                            <div class="stories-data ms-3">
                                <h5>Anna Sthesia</h5>
                                <p class="mb-0">Today</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="{{ asset('/images/template/user/02.jpg') }}" alt="story-img"
                                class="rounded-circle img-fluid">
                            <div class="stories-data ms-3">
                                <h5>Paul Molive</h5>
                                <p class="mb-0">Tomorrow</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        {{-- <div class="col-sm-12 text-center">
            <img src="{{ asset('/images/template/page-img/page-load-loader.gif') }}" alt="loader" style="height: 100px;">
        </div> --}}
    </div>
@endsection
