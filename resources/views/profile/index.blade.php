@extends('layout')

@section('style')
   <style>
      .friends-tab-profile-img{
         min-height: 140px;
         max-height: 140px;
         min-width: 140px;
         max-width: 140px;
         object-fit: contain;
      }
      .timeline-friends-profile-img{
         min-height: 90px;
         max-height: 90px;
         min-width: 90px;
         max-width: 90px;
         object-fit: contain;
      }
   </style>
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
       <div class="card">
          <div class="card-body profile-page p-0">
             <div class="profile-header">
                <div class="position-relative">
                   <img src="{{asset('/images/template/page-img/profile-bg1.jpg')}}" alt="profile-bg" class="rounded img-fluid">
                   <ul class="header-nav list-inline d-flex flex-wrap justify-end p-0 m-0">
                      <li><a href="#"><i class="ri-pencil-line"></i></a></li>
                      <li><a href="#"><i class="ri-settings-4-line"></i></a></li>
                   </ul>
                </div>
                <div class="user-detail text-center mb-3">
                   <div class="profile-img">
                      <img src="{{asset('/images/template/user/11.png')}}" alt="profile-img" class="avatar-130 img-fluid" />
                   </div>
                   <div class="profile-detail">
                      <h3 class="">{{auth()->user()->name}}</h3>
                   </div>
                </div>
                <div class="profile-info p-3 d-flex align-items-center justify-content-between position-relative">
                   <div class="social-links">
                      <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                         <li class="text-center pe-3">
                            <a href="#"><img src="{{asset('/images/template/icon/08.png')}}" class="img-fluid rounded" alt="facebook"></a>
                         </li>
                         <li class="text-center pe-3">
                            <a href="#"><img src="{{asset('/images/template/icon/09.png')}}" class="img-fluid rounded" alt="Twitter"></a>
                         </li>
                         <li class="text-center pe-3">
                            <a href="#"><img src="{{asset('/images/template/icon/10.png')}}" class="img-fluid rounded" alt="Instagram"></a>
                         </li>
                         <li class="text-center pe-3">
                            <a href="#"><img src="{{asset('/images/template/icon/11.png')}}" class="img-fluid rounded" alt="Google plus"></a>
                         </li>
                         <li class="text-center pe-3">
                            <a href="#"><img src="{{asset('/images/template/icon/12.png')}}" class="img-fluid rounded" alt="You tube"></a>
                         </li>
                         <li class="text-center md-pe-3 pe-0">
                            <a href="#"><img src="{{asset('/images/template/icon/13.png')}}" class="img-fluid rounded" alt="linkedin"></a>
                         </li>
                      </ul>
                   </div>
                   <div class="social-info">
                      <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                         <li class="text-center ps-3">
                            <h6>Posts</h6>
                            <p class="mb-0">690</p>
                         </li>
                         <li class="text-center ps-3">
                            <h6>Followers</h6>
                            <p class="mb-0">206</p>
                         </li>
                         <li class="text-center ps-3">
                            <h6>Following</h6>
                            <p class="mb-0">100</p>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="card">
          <div class="card-body p-0">
             <div class="user-tabing">
                <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                   <li class="nav-item col-12 col-sm-3 p-0">
                      <a class="nav-link active" href="#pills-timeline-tab" data-bs-toggle="pill" data-bs-target="#timeline" role="button">Timeline</a>
                   </li>
                   <li class="nav-item col-12 col-sm-3 p-0">
                      <a class="nav-link" href="#pills-about-tab" data-bs-toggle="pill" data-bs-target="#about" role="button">About</a>
                   </li>
                   <li class="nav-item col-12 col-sm-3 p-0">
                      <a class="nav-link" href="#pills-friends-tab" data-bs-toggle="pill" data-bs-target="#friends" role="button">Friends</a>
                   </li>
                   <li class="nav-item col-12 col-sm-3 p-0">
                      <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill" data-bs-target="#photos" role="button">Photos</a>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    <div class="col-sm-12">
       <div class="tab-content">
          <div class="tab-pane fade show active" id="timeline" role="tabpanel">
             <div class="card-body p-0">
                <div class="row">
                   <div class="col-lg-4">
                      {{-- <div class="card">
                         <div class="card-body">
                            <a href="#"><span class="badge badge-pill bg-primary font-weight-normal ms-auto me-1"><i class="ri-star-line"></i></span> 27 Items for yoou</a>
                         </div>
                      </div> --}}
                      {{-- <div class="card">
                         <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                               <h4 class="card-title">Life Event</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                               <p class="m-0"><a href="javacsript:void();"> Create </a></p>
                            </div>
                         </div>
                         <div class="card-body">
                            <div class="row">
                               <div class="col-sm-12">
                                  <div class="event-post position-relative">
                                     <a href="#"><img src="{{asset('/images/template/page-img/07.jpg')}}" alt="gallary-image" class="img-fluid rounded"></a>
                                     <div class="job-icon-position">
                                        <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line text-white"></i></div>
                                     </div>
                                     <div class="card-body text-center p-2">
                                        <h5>Started New Job at Apple</h5>
                                        <p>January 24, 2019</p>
                                     </div>
                                  </div>
                               </div>
                               <div class="col-sm-12">
                                  <div class="event-post position-relative">
                                     <a href="#"><img src="{{asset('/images/template/page-img/06.jpg')}}" alt="gallary-image" class="img-fluid rounded"></a>
                                     <div class="job-icon-position">
                                        <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line text-white"></i></div>
                                     </div>
                                     <div class="card-body text-center p-2">
                                        <h5>Freelance Photographer</h5>
                                        <p class="mb-0">January 24, 2019</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div> --}}
                      <div class="card">
                         <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                               <h4 class="card-title">Photos</h4>
                            </div>
                         </div>
                         <div class="card-body">
                            <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                               <li class=""><a href="#"><img src="{{asset('/images/template/page-img/g1.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class=""><a href="#"><img src="{{asset('/images/template/page-img/g2.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class=""><a href="#"><img src="{{asset('/images/template/page-img/g3.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class=""><a href="#"><img src="{{asset('/images/template/page-img/g4.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class=""><a href="#"><img src="{{asset('/images/template/page-img/g5.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class=""><a href="#"><img src="{{asset('/images/template/page-img/g6.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class=""><a href="#"><img src="{{asset('/images/template/page-img/g7.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class=""><a href="#"><img src="{{asset('/images/template/page-img/g8.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class=""><a href="#"><img src="{{asset('/images/template/page-img/g9.jpg')}}" alt="gallary-image" class="img-fluid" /></a></li>
                            </ul>
                         </div>
                      </div>
                      <div class="card">
                         <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                               <h4 class="card-title">Friends</h4>
                            </div>
                         </div>
                         <div class="card-body">
                            <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                              @if($friends->isEmpty())
                                 <p>You have no friends.</p>
                              @else
                                 @foreach ($friends as $key => $item)
                                    <li class="">
                                       <a href="#">
                                        <img class="timeline-friends-profile-img" src="{{ isset($item->friendDetail->image) ? asset('/images/user/'.$item->friendDetail->image) : asset('/images/user/1.jpg') }}" alt="gallery-image" class="img-fluid" />


                                       <h6 class="mt-2 text-center">{{$item->friend->name}}</h6>
                                    </li>
                                 @endforeach
                              @endempty
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-8">
                      <div id="post-modal-data" class="card">
                         <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                               <h4 class="card-title">Create Post</h4>
                            </div>
                         </div>
                         <div class="card-body">
                            <div class="d-flex align-items-center">
                               <div class="user-img">
                                  <img src="{{asset('/images/template/user/1.jpg')}}" alt="userimg" class="avatar-60 rounded-circle">
                               </div>
                               <form class="post-text ms-3 w-100 "  data-bs-toggle="modal" data-bs-target="#post-modal" action="#">
                                  <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                               </form>
                            </div>
                            <hr>
                             <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                                  <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2"><img src="{{asset('/images/template/small/07.png')}}" alt="icon" class="img-fluid me-2"> Photo/Video</li>
                                  <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2"><img src="{{asset('/images/template/small/08.png')}}" alt="icon" class="img-fluid me-2"> Tag Friend</li>
                                  <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3"><img src="{{asset('/images/template/small/09.png')}}" alt="icon" class="img-fluid me-2"> Feeling/Activity</li>
                                  <li class="bg-soft-primary rounded p-2 pointer text-center">
                                      <div class="card-header-toolbar d-flex align-items-center">
                                      <div class="dropdown">
                                          <div class="dropdown-toggle" id="post-option"   data-bs-toggle="dropdown">
                                              <i class="ri-more-fill h4"></i>
                                          </div>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Check in</a>
                                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Live Video</a>
                                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Gif</a>
                                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Watch Party</a>
                                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Play with Friend</a>
                                          </div>
                                      </div>
                                      </div>
                                  </li>
                              </ul>
                         </div>
                         <div class="modal fade" id="post-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
                            <div class="modal-dialog  modal-lg modal-fullscreen-sm-down">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                  </div>
                                  <div class="modal-body">
                                      <form action="{{route('postStore')}}" method="post">
                                          @csrf
                                          <div class="d-flex align-items-center">
                                              <div class="user-img">
                                                  <img src="{{ asset('/images/template/user/1.jpg') }}" alt="userimg"
                                                      class="avatar-60 rounded-circle img-fluid">
                                              </div>
                                              {{-- <form class="post-text ms-3 w-100" action="javascript:void();"> --}}
                                                  <input type="text" class="form-control rounded" name="description"
                                                      placeholder="Write something here..." style="border:none;">
                                              {{-- </form> --}}
                                          </div>
                                          <hr>
                                          <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                              <li class="col-md-6 mb-3">
                                                  <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                          href="#"></a><img src="{{ asset('/images/template/small/07.png') }}"
                                                          alt="icon" class="img-fluid"> Photo/Video</div>
                                              </li>
                                              <li class="col-md-6 mb-3">
                                                  <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                          href="#"></a><img src="{{ asset('/images/template/small/08.png') }}"
                                                          alt="icon" class="img-fluid"> Tag Friend</div>
                                              </li>
                                              <li class="col-md-6 mb-3">
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
                                              </li>
                                          </ul>
                                          <hr>
                                          <div class="other-option">
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                      <div class="user-img me-3">
                                                          <img src="{{ asset('/images/template/user/1.jpg') }}" alt="userimg"
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
                                          </div>
                                          <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                      </form>
                                  </div>
                               </div>
                            </div>
                         </div>
                     </div>
                     @if($posts->isEmpty())
                        <div class="card">
                            <div class="card-body">
                                <p>You have no posts. Please create a post.</p>
                            </div>
                        </div>
                    @else
                        @foreach ($posts as $key => $item)
                            <div class="card">
                            <div class="card-body">
                                <div class="post-item">
                                    <div class="user-post-data py-3">
                                        <div class="d-flex justify-content-between">
                                        <div class="me-3">
                                            <img class="rounded-circle avatar-60" src="{{asset('/images/template/user/1.jpg')}}" alt="">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h5 class="mb-0 d-inline-block"><a href="#" class="">{{auth()->user()->name}}</a></h5>
                                                    <p class="ms-1 mb-0 d-inline-block">Update his Status</p>
                                                    <p class="mb-0">{{convertToTimeAgo($item->created_at)}}</p>
                                                </div>
                                                <div class="card-post-toolbar">
                                                    <div class="dropdown">
                                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
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
                                                                <i class="ri-pencil-line h4"></i>
                                                                <div class="data ms-2">
                                                                <h6>Edit Post</h6>
                                                                <p class="mb-0">Update your post and saved items</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                            <i class="ri-close-circle-line h4"></i>
                                                                <div class="data ms-2">
                                                                <h6>Hide From Timeline</h6>
                                                                <p class="mb-0">See fewer posts like this.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                                <i class="ri-delete-bin-7-line h4"></i>
                                                                <div class="data ms-2">
                                                                <h6>Delete</h6>
                                                                <p class="mb-0">Remove thids Post on Timeline</p>
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
                                    <div class="user-post">
                                        <p>
                                        {{$item->description}}
                                        </p>
                                    </div>
                                    <div class="comment-area mt-3">
                                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="like-block position-relative d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="like-data">
                                                    <div class="dropdown">
                                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                    <img src="{{asset('/images/template/icon/01.png')}}" class="img-fluid" alt="">
                                                    </span>
                                                    <div class="dropdown-menu py-2">
                                                        <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="{{asset('/images/template/icon/01.png')}}" class="img-fluid" alt=""></a>
                                                        <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="{{asset('/images/template/icon/02.png')}}" class="img-fluid" alt=""></a>
                                                        <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="{{asset('/images/template/icon/03.png')}}" class="img-fluid" alt=""></a>
                                                        <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="{{asset('/images/template/icon/04.png')}}" class="img-fluid" alt=""></a>
                                                        <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="{{asset('/images/template/icon/05.png')}}" class="img-fluid" alt=""></a>
                                                        <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="{{asset('/images/template/icon/06.png')}}" class="img-fluid" alt=""></a>
                                                        <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="{{asset('/images/template/icon/07.png')}}" class="img-fluid" alt=""></a>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="total-like-block ms-2 me-3">
                                                    <div class="dropdown">
                                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
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
                                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
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
                                                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                                                <span class="ms-1">99 Share</span></a>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul class="post-comments p-0 m-0">
                                        <li class="mb-2">
                                            <div class="d-flex flex-wrap">
                                                <div class="user-img">
                                                    <img src="{{asset('/images/template/user/02.jpg')}}" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                </div>
                                                <div class="comment-data-block ms-3">
                                                    <h6>Monty Carlo</h6>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center comment-activity">
                                                    <a href="#">like</a>
                                                    <a href="#">reply</a>
                                                    <a href="#">translate</a>
                                                    <span> 5 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-wrap">
                                                <div class="user-img">
                                                    <img src="{{asset('/images/template/user/03.jpg')}}" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                </div>
                                                <div class="comment-data-block ms-3">
                                                    <h6>Paul Molive</h6>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center comment-activity">
                                                    <a href="#">like</a>
                                                    <a href="#">reply</a>
                                                    <a href="#">translate</a>
                                                    <span> 5 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        </ul>
                                        <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                        <div class="comment-attagement d-flex">
                                            <a href="#"><i class="ri-link me-3"></i></a>
                                            <a href="#"><i class="ri-user-smile-line me-3"></i></a>
                                            <a href="#"><i class="ri-camera-line me-3"></i></a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        @endforeach
                    @endempty

                   </div>
                </div>
             </div>
          </div>
          <div class="tab-pane fade" id="about" role="tabpanel" >
             <div class="card">
                <div class="card-body">
                   <div class="row">
                      <div class="col-md-3">
                         <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                            <li>
                               <a class="nav-link active" href="#v-pills-basicinfo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-basicinfo-tab" role="button">Contact and Basic Info</a>
                            </li>
                            <li>
                               <a class="nav-link" href="#v-pills-family-tab" data-bs-toggle="pill" data-bs-target="#v-pills-family" role="button">Family and Relationship</a>
                            </li>
                            <li>
                               <a class="nav-link" href="#v-pills-work-tab" data-bs-toggle="pill" data-bs-target="#v-pills-work-tab" role="button">Work and Education</a>
                            </li>
                            <li>
                               <a class="nav-link" href="#v-pills-lived-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lived-tab" role="button">Places You've Lived</a>
                            </li>
                            <li>
                               <a class="nav-link" href="#v-pills-details-tab" data-bs-toggle="pill" data-bs-target="#v-pills-details-tab" role="button">Details About You</a>
                            </li>
                         </ul>
                      </div>
                      <div class="col-md-9 ps-4">
                         <div class="tab-content" >
                            <div class="tab-pane fade active show" id="v-pills-basicinfo-tab" role="tabpanel"  aria-labelledby="v-pills-basicinfo-tab">
                               <h4>Contact Information</h4>
                               <hr>
                               <div class="row">
                                  <div class="col-3">
                                     <h6>Email</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">Bnijohn@gmail.com</p>
                                  </div>
                                  <div class="col-3">
                                     <h6>Mobile</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">(001) 4544 565 456</p>
                                  </div>
                                  <div class="col-3">
                                     <h6>Address</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">United States of America</p>
                                  </div>
                               </div>
                               <h4 class="mt-3">Websites and Social Links</h4>
                               <hr>
                               <div class="row">
                                  <div class="col-3">
                                     <h6>Website</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">www.bootstrap.com</p>
                                  </div>
                                  <div class="col-3">
                                     <h6>Social Link</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">www.bootstrap.com</p>
                                  </div>
                               </div>
                               <h4 class="mt-3">Basic Information</h4>
                               <hr>
                               <div class="row">
                                  <div class="col-3">
                                     <h6>Birth Date</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">24 January</p>
                                  </div>
                                  <div class="col-3">
                                     <h6>Birth Year</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">1994</p>
                                  </div>
                                  <div class="col-3">
                                     <h6>Gender</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">Female</p>
                                  </div>
                                  <div class="col-3">
                                     <h6>interested in</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">Designing</p>
                                  </div>
                                  <div class="col-3">
                                     <h6>language</h6>
                                  </div>
                                  <div class="col-9">
                                     <p class="mb-0">English, French</p>
                                  </div>
                               </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-family" role="tabpanel">
                               <h4 class="mb-3">Relationship</h4>
                               <ul class="suggestions-lists m-0 p-0">
                                  <li class="d-flex mb-4 align-items-center">
                                     <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                     <div class="media-support-info ms-3">
                                        <h6>Add Your Relationship Status</h6>
                                     </div>
                                  </li>
                               </ul>
                               <h4 class="mt-3 mb-3">Family Members</h4>
                               <ul class="suggestions-lists m-0 p-0">
                                  <li class="d-flex mb-4 align-items-center">
                                     <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                     <div class="media-support-info ms-3">
                                        <h6>Add Family Members</h6>
                                     </div>
                                  </li>
                                  <li class="d-flex mb-4 align-items-center justify-content-between">
                                     <div class="user-img img-fluid"><img src="{{asset('/images/template/user/01.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>
                                     <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                           <div class="ms-3">
                                              <h6>Paul Molive</h6>
                                              <p class="mb-0">Brothe</p>
                                           </div>
                                           <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                        </div>
                                     </div>
                                  </li>
                                  <li class="d-flex justify-content-between mb-4  align-items-center">
                                     <div class="user-img img-fluid"><img src="{{asset('/images/template/user/02.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>
                                     <div class="w-100">
                                        <div class="d-flex flex-wrap justify-content-between">
                                           <div class=" ms-3">
                                              <h6>Anna Mull</h6>
                                              <p class="mb-0">Sister</p>
                                           </div>
                                           <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                        </div>
                                     </div>
                                  </li>
                                  <li class="d-flex mb-4 align-items-center justify-content-between">
                                     <div class="user-img img-fluid"><img src="{{asset('/images/template/user/03.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>
                                     <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                           <div class="ms-3">
                                              <h6>Paige Turner</h6>
                                              <p class="mb-0">Cousin</p>
                                           </div>
                                           <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                        </div>
                                     </div>
                                  </li>
                               </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-work-tab" role="tabpanel" aria-labelledby="v-pills-work-tab">
                               <h4 class="mb-3">Work</h4>
                               <ul class="suggestions-lists m-0 p-0">
                                  <li class="d-flex justify-content-between mb-4  align-items-center">
                                     <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                     <div class="ms-3">
                                        <h6>Add Work Place</h6>
                                     </div>
                                  </li>
                                  <li class="d-flex mb-4 align-items-center justify-content-between">
                                     <div class="user-img img-fluid"><img src="{{asset('/images/template/user/01.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>
                                     <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                           <div class="ms-3">
                                              <h6>Themeforest</h6>
                                              <p class="mb-0">Web Designer</p>
                                           </div>
                                           <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                        </div>
                                     </div>
                                  </li>
                                  <li class="d-flex mb-4 align-items-center justify-content-between">
                                     <div class="user-img img-fluid"><img src="{{asset('/images/template/user/02.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>
                                     <div class="w-100">
                                        <div class="d-flex flex-wrap justify-content-between">
                                           <div class="ms-3">
                                              <h6>iqonicdesign</h6>
                                              <p class="mb-0">Web Developer</p>
                                           </div>
                                           <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                        </div>
                                     </div>
                                  </li>
                                  <li class="d-flex mb-4 align-items-center justify-content-between">
                                     <div class="user-img img-fluid"><img src="{{asset('/images/template/user/03.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>
                                     <div class="w-100">
                                        <div class="d-flex flex-wrap justify-content-between">
                                           <div class="ms-3">
                                              <h6>W3school</h6>
                                              <p class="mb-0">Designer</p>
                                           </div>
                                           <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                        </div>
                                     </div>
                                  </li>
                               </ul>
                               <h4 class="mb-3">Professional Skills</h4>
                               <ul class="suggestions-lists m-0 p-0">
                                  <li class="d-flex mb-4 align-items-center">
                                     <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                     <div class="ms-3">
                                        <h6>Add Professional Skills</h6>
                                     </div>
                                  </li>
                               </ul>
                               <h4 class="mt-3 mb-3">College</h4>
                               <ul class="suggestions-lists m-0 p-0">
                                  <li class="d-flex mb-4 align-items-center">
                                     <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                     <div class="ms-3">
                                        <h6>Add College</h6>
                                     </div>
                                  </li>
                                  <li class="d-flex mb-4 align-items-center">
                                     <div class="user-img img-fluid"><img src="{{asset('/images/template/user/01.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>
                                     <div class="w-100">
                                        <div class="d-flex flex-wrap justify-content-between">
                                           <div class="ms-3">
                                              <h6>Lorem ipsum</h6>
                                              <p class="mb-0">USA</p>
                                           </div>
                                           <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                        </div>
                                     </div>
                                  </li>
                               </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-lived-tab" role="tabpanel" aria-labelledby="v-pills-lived-tab">
                               <h4 class="mb-3">Current City and Hometown</h4>
                               <ul class="suggestions-lists m-0 p-0">
                                  <li class="d-flex mb-4 align-items-center justify-content-between">
                                     <div class="user-img img-fluid"><img src="{{asset('/images/template/user/01.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>
                                     <div class="w-100">
                                        <div class="d-flex flex-wrap justify-content-between">
                                           <div class="ms-3">
                                              <h6>Georgia</h6>
                                              <p class="mb-0">Georgia State</p>
                                           </div>
                                           <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                        </div>
                                     </div>
                                  </li>
                                  <li class="d-flex mb-4 align-items-center justify-content-between">
                                     <div class="user-img img-fluid"><img src="{{asset('/images/template/user/02.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>
                                     <div class="w-100">
                                        <div class="d-flex flex-wrap justify-content-between">
                                           <div class="ms-3">
                                              <h6>Atlanta</h6>
                                              <p class="mb-0">Atlanta City</p>
                                           </div>
                                           <div class="edit-relation"><a href="#"><i class="ri-edit-line me-2"></i>Edit</a></div>
                                        </div>
                                     </div>
                                  </li>
                               </ul>
                               <h4 class="mt-3 mb-3">Other Places Lived</h4>
                               <ul class="suggestions-lists m-0 p-0">
                                  <li class="d-flex mb-4 align-items-center">
                                     <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                     <div class="ms-3">
                                        <h6>Add Place</h6>
                                     </div>
                                  </li>
                               </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-details-tab" role="tabpanel" aria-labelledby="v-pills-details-tab">
                               <h4 class="mb-3">About You</h4>
                               <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.</p>
                               <h4 class="mt-3 mb-3">Other Name</h4>
                               <p>Bini Rock</p>
                               <h4 class="mt-3 mb-3">Favorite Quotes</h4>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="tab-pane fade" id="friends" role="tabpanel">
             <div class="card">
                <div class="card-body">
                  <div class="row">
                     <div class="col-md-6">
                        <h2>Friends</h2>
                     </div>
                     <div class="col-md-6">
                        <a href="{{route('createFriends')}}" class="btn btn-success">
                           Create Friends
                        </a>
                     </div>
                  </div>

                   <div class="friend-list-tab mt-2">
                      <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                         <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#pill-all-friends" data-bs-target="#all-feinds">All Friends</a>
                         </li>
                         <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#pill-recently-add" data-bs-target="#recently-add">Recently Added</a>
                         </li>
                         <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#pill-closefriends" data-bs-target="#closefriends"> Close friends</a>
                         </li>
                         <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#pill-home" data-bs-target="#home-town"> Home/Town</a>
                         </li>
                         <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#pill-following" data-bs-target="#following">Following</a>
                         </li>
                      </ul>
                      <div class="tab-content">
                         <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                            <div class="card-body p-0">
                               <div class="row">
                                 @if($friends->isEmpty())
                                    <p>You have no friends.</p>
                                 @else
                                    @foreach ($friends as $key => $item)
                                       <div class="col-md-6 col-lg-6 mb-3">
                                          <div class="iq-friendlist-block">
                                             <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                   <a href="#">
                                                    <img class="timeline-friends-profile-img" src="{{ isset($item->friendDetail->image) ? asset('/images/user/'.$item->friendDetail->image) : asset('/images/user/1.jpg') }}" alt="gallery-image" class="img-fluid" />

                                                   </a>
                                                   <div class="friend-info ms-3">
                                                      <h5>{{$item->friend->name}}</h5>
                                                      <p class="mb-0">Friends since {{ \Carbon\Carbon::parse($item->friend->created_at)->format('D, d M, Y') }}</p>
                                                   </div>
                                                </div>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                   <div class="dropdown">
                                                      <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                      <i class="ri-check-line me-1 text-white"></i> Friend
                                                      </span>
                                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                         <a class="dropdown-item" href="#">Get Notification</a>
                                                         <a class="dropdown-item" href="#">Close Friend</a>
                                                         <a class="dropdown-item" href="#">Unfollow</a>
                                                         <a class="dropdown-item" href="#">Unfriend</a>
                                                         <a class="dropdown-item" href="#">Block</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    @endforeach
                                 @endempty
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="recently-add" role="tabpanel">
                            <div class="card-body p-0">
                               <div class="row">
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/07.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Otto Matic</h5>
                                                 <p class="mb-0">4  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton31" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton31">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/08.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Moe Fugga</h5>
                                                 <p class="mb-0">16  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton32" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton32">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/09.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Tom Foolery</h5>
                                                 <p class="mb-0">14  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton33" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton33">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/10.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Bud Wiser</h5>
                                                 <p class="mb-0">16  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton34" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton34">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/15.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Polly Tech</h5>
                                                 <p class="mb-0">10  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton35" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton35">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/16.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Holly Graham</h5>
                                                 <p class="mb-0">8  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton36">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/17.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Tara Zona</h5>
                                                 <p class="mb-0">5  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton37" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton37">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/18.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Barry Cade</h5>
                                                 <p class="mb-0">20  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton38" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton38">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="closefriends" role="tabpanel">
                            <div class="card-body p-0">
                               <div class="row">
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/19.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Bud Wiser</h5>
                                                 <p class="mb-0">32  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton39" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton39">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/05.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Otto Matic</h5>
                                                 <p class="mb-0">9  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton40" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton40">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/06.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Peter Pants</h5>
                                                 <p class="mb-0">2  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton41" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton41">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/07.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Zack Lee</h5>
                                                 <p class="mb-0">15  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton42" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton42">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/08.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Barry Wine</h5>
                                                 <p class="mb-0">36  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton43" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton43">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/09.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Robin Banks</h5>
                                                 <p class="mb-0">22  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton44" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton44">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/10.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Cory Ander</h5>
                                                 <p class="mb-0">18  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton45" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton45">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/15.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Moe Fugga</h5>
                                                 <p class="mb-0">12  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton46" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton46">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/16.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Polly Tech</h5>
                                                 <p class="mb-0">30  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton47" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton47">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/17.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Hal Appeno</h5>
                                                 <p class="mb-0">25  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton48" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton48">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="home-town" role="tabpanel">
                            <div class="card-body p-0">
                               <div class="row">
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/18.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Paul Molive</h5>
                                                 <p class="mb-0">14  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton49" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton49">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/19.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Paige Turner</h5>
                                                 <p class="mb-0">8  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton50" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton50">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/05.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Barb Ackue</h5>
                                                 <p class="mb-0">23  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton51" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton51">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/06.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Ira Membrit</h5>
                                                 <p class="mb-0">16  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton52" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton52">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/07.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Maya Didas</h5>
                                                 <p class="mb-0">12  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton53" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton53">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="following" role="tabpanel">
                            <div class="card-body p-0">
                               <div class="row">
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/05.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Maya Didas</h5>
                                                 <p class="mb-0">20  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton54" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton54">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/06.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Monty Carlo</h5>
                                                 <p class="mb-0">3  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton55" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton55">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/07.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Cliff Hanger</h5>
                                                 <p class="mb-0">20  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton56" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton56">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/08.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>b Ackue</h5>
                                                 <p class="mb-0">12  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton57" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton57">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/09.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Bob Frapples</h5>
                                                 <p class="mb-0">12  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton58" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton58">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/10.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Anna Mull</h5>
                                                 <p class="mb-0">6  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton59" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton59">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/15.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>ry Wine</h5>
                                                 <p class="mb-0">15  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton60" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton60">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/16.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Don Stairs</h5>
                                                 <p class="mb-0">12  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton61" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton61">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/17.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Peter Pants</h5>
                                                 <p class="mb-0">8  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton62" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton62">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/18.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Polly Tech</h5>
                                                 <p class="mb-0">18  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton63" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton63">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/19.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Tara Zona</h5>
                                                 <p class="mb-0">30  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton64" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton64">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/05.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Arty Ficial</h5>
                                                 <p class="mb-0">15  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton65" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton65">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/06.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Bill Emia</h5>
                                                 <p class="mb-0">25  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton66" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton66">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/07.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Bill Yerds</h5>
                                                 <p class="mb-0">9  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton67" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton67">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 mb-3">
                                     <div class="iq-friendlist-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                              <a href="#">
                                              <img src="{{asset('/images/template/user/08.jpg')}}" alt="profile-img" class="img-fluid">
                                              </a>
                                              <div class="friend-info ms-3">
                                                 <h5>Matt Innae</h5>
                                                 <p class="mb-0">19  friends</p>
                                              </div>
                                           </div>
                                           <div class="card-header-toolbar d-flex align-items-center">
                                              <div class="dropdown">
                                                 <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton68" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                 <i class="ri-check-line me-1 text-white"></i> Friend
                                                 </span>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton68">
                                                    <a class="dropdown-item" href="#">Get Notification</a>
                                                    <a class="dropdown-item" href="#">Close Friend</a>
                                                    <a class="dropdown-item" href="#">Unfollow</a>
                                                    <a class="dropdown-item" href="#">Unfriend</a>
                                                    <a class="dropdown-item" href="#">Block</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="tab-pane fade" id="photos" role="tabpanel">
             <div class="card">
                <div class="card-body">
                   <h2>Photos</h2>
                   <div class="friend-list-tab mt-2">
                      <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                         <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#pill-photosofyou" data-bs-target="#photosofyou">Photos of You</a>
                         </li>
                         <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#pill-your-photos" data-bs-target="#your-photos">Your Photos</a>
                         </li>
                      </ul>
                      <div class="tab-content">
                         <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                            <div class="card-body p-0">
                               <div class="d-grid gap-2 d-grid-template-1fr-13">
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/51.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/52.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/53.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/54.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/55.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/56.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/57.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/58.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/59.jpg')}}" class="img-fluid rounded" alt="image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/60.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/61.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/62.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/63.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/64.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/65.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/51.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/52.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/53.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/54.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/55.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/56.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/57.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/58.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/59.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="your-photos" role="tabpanel">
                            <div class="card-body p-0">
                               <div class="d-grid gap-2 d-grid-template-1fr-13 ">
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/51.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/52.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/53.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/54.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/55.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/56.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/57.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/58.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/59.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                                  <div class="">
                                     <div class="user-images position-relative overflow-hidden">
                                        <a href="#">
                                        <img src="{{asset('/images/template/page-img/60.jpg')}}" class="img-fluid rounded" alt="Responsive image">
                                        </a>
                                        <div class="image-hover-data">
                                           <div class="product-elements-icon">
                                              <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                 <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                 <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="col-sm-12 text-center">
       <img src="{{asset('/images/template/page-img/page-load-loader.gif')}}" alt="loader" style="height: 100px;">
    </div>
 </div>
@endsection
