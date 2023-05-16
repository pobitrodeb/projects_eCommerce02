@extends('admin.master')
@section('title')
    Home
@endsection

@section('header-top')
<!--start top header-->
<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
      <div class="mobile-toggle-icon fs-3">
          <i class="bi bi-list"></i>
        </div>
        <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
        </form>
        <div class="top-navbar-right ms-auto">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item search-toggle-icon">
              <a class="nav-link" href="#">
                <div class="">
                  <i class="bi bi-search"></i>
                </div>
              </a>
          </li>
          <li class="nav-item dropdown dropdown-user-setting">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="user-setting d-flex align-items-center">
                <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-1.png" class="user-img" alt="">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                      <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">
                      <div class="ms-3">
                        <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                      </div>
                   </div>
                 </a>
               </li>
               <li><hr class="dropdown-divider"></li>
               <li>
                  <a class="dropdown-item" href="pages-user-profile.html">
                     <div class="d-flex align-items-center">
                       <div class=""><i class="bi bi-person-fill"></i></div>
                       <div class="ms-3"><span>Profile</span></div>
                     </div>
                   </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                       <div class=""><i class="bi bi-gear-fill"></i></div>
                       <div class="ms-3"><span>Setting</span></div>
                     </div>
                   </a>
                </li>
                <li>
                  <a class="dropdown-item" href="index2.html">
                     <div class="d-flex align-items-center">
                       <div class=""><i class="bi bi-speedometer"></i></div>
                       <div class="ms-3"><span>Dashboard</span></div>
                     </div>
                   </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                       <div class=""><i class="bi bi-piggy-bank-fill"></i></div>
                       <div class="ms-3"><span>Earnings</span></div>
                     </div>
                   </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                       <div class=""><i class="bi bi-cloud-arrow-down-fill"></i></div>
                       <div class="ms-3"><span>Downloads</span></div>
                     </div>
                   </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <a class="dropdown-item" href="">
                     <div class="d-flex align-items-center">
                       <div class=""><i class="bi bi-lock-fill"></i></div>
                       <div class="ms-3">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
                       </div>
                       <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                        @csrf
                      </form>
                     </div>
                   </a>
                </li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="projects">
                <i class="bi bi-grid-3x3-gap-fill"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
               <div class="row row-cols-3 gx-2">
                  <div class="col">
                    <a href="ecommerce-orders.html">
                     <div class="apps p-2 radius-10 text-center">
                        <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                          <i class="bi bi-basket2-fill"></i>
                        </div>
                        <p class="mb-0 apps-name">Orders</p>
                     </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="javascript:;">
                    <div class="apps p-2 radius-10 text-center">
                       <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                        <i class="bi bi-people-fill"></i>
                       </div>
                       <p class="mb-0 apps-name">Users</p>
                    </div>
                  </a>
                 </div>
                 <div class="col">
                  <a href="ecommerce-products-grid.html">
                  <div class="apps p-2 radius-10 text-center">
                     <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                      <i class="bi bi-trophy-fill"></i>
                     </div>
                     <p class="mb-0 apps-name">Products</p>
                  </div>
                  </a>
                </div>
                <div class="col">
                  <a href="component-media-object.html">
                  <div class="apps p-2 radius-10 text-center">
                     <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                      <i class="bi bi-collection-play-fill"></i>
                     </div>
                     <p class="mb-0 apps-name">Media</p>
                  </div>
                  </a>
                </div>
                <div class="col">
                  <a href="pages-user-profile.html">
                  <div class="apps p-2 radius-10 text-center">
                     <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                      <i class="bi bi-person-circle"></i>
                     </div>
                     <p class="mb-0 apps-name">Account</p>
                   </div>
                  </a>
                </div>
                <div class="col">
                  <a href="javascript:;">
                  <div class="apps p-2 radius-10 text-center">
                     <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                      <i class="bi bi-file-earmark-text-fill"></i>
                     </div>
                     <p class="mb-0 apps-name">Docs</p>
                  </div>
                  </a>
                </div>
                <div class="col">
                  <a href="ecommerce-orders-detail.html">
                  <div class="apps p-2 radius-10 text-center">
                     <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                      <i class="bi bi-credit-card-fill"></i>
                     </div>
                     <p class="mb-0 apps-name">Payment</p>
                  </div>
                  </a>
                </div>
                <div class="col">
                  <a href="javascript:;">
                  <div class="apps p-2 radius-10 text-center">
                     <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                      <i class="bi bi-calendar-check-fill"></i>
                     </div>
                     <p class="mb-0 apps-name">Events</p>
                  </div>
                </a>
                </div>
                <div class="col">
                  <a href="javascript:;">
                  <div class="apps p-2 radius-10 text-center">
                     <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                      <i class="bi bi-book-half"></i>
                     </div>
                     <p class="mb-0 apps-name">Story</p>
                    </div>
                  </a>
                </div>
               </div><!--end row-->
            </div>
          </li>
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="messages">
                <span class="notify-badge">5</span>
                <i class="bi bi-chat-right-fill"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0">
              <div class="p-2 border-bottom m-2">
                  <h5 class="h5 mb-0">Messages</h5>
              </div>
             <div class="header-message-list p-2">
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                      <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                      </div>
                   </div>
                 </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                     </div>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                     </div>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-4.png" alt="" class="rounded-circle" width="50" height="50">
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">Peter Costanzo <span class="msg-time float-end text-secondary">3 h</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">It was popularised in the 1960</small>
                     </div>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-5.png" alt="" class="rounded-circle" width="50" height="50">
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">Thomas Wheeler <span class="msg-time float-end text-secondary">1 d</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">If you are going to use a passage</small>
                     </div>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-6.png" alt="" class="rounded-circle" width="50" height="50">
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">Johnny Seitz <span class="msg-time float-end text-secondary">2 w</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">All the Lorem Ipsum generators</small>
                     </div>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                     </div>
                  </div>
                </a>
               <a class="dropdown-item" href="#">
                 <div class="d-flex align-items-center">
                    <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                    <div class="ms-3 flex-grow-1">
                      <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                      <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                    </div>
                 </div>
               </a>
               <a class="dropdown-item" href="#">
                 <div class="d-flex align-items-center">
                    <img src="{{ asset('/') }}admin/assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                    <div class="ms-3 flex-grow-1">
                      <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                      <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                    </div>
                 </div>
               </a>
            </div>
            <div class="p-2">
              <div><hr class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <div class="text-center">View All Messages</div>
                </a>
            </div>
           </div>
          </li>
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="notifications">
                <span class="notify-badge">8</span>
                <i class="bi bi-bell-fill"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0">
              <div class="p-2 border-bottom m-2">
                  <h5 class="h5 mb-0">Notifications</h5>
              </div>
              <div class="header-notifications-list p-2">
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                       <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                       <div class="ms-3 flex-grow-1">
                         <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                         <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
                       </div>
                    </div>
                  </a>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-purple text-purple"><i class="bi bi-people-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">New Customers <span class="msg-time float-end text-secondary">7 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 new user registered</small>
                      </div>
                   </div>
                 </a>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-success text-success"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">24 PDF File <span class="msg-time float-end text-secondary">2 h</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The pdf files generated</small>
                      </div>
                   </div>
                 </a>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-orange text-orange"><i class="bi bi-collection-play-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Time Response  <span class="msg-time float-end text-secondary">3 h</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5.1 min avarage time response</small>
                      </div>
                   </div>
                 </a>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-info text-info"><i class="bi bi-cursor-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">New Product Approved  <span class="msg-time float-end text-secondary">1 d</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your new product has approved</small>
                      </div>
                   </div>
                 </a>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-pink text-pink"><i class="bi bi-gift-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">New Comments <span class="msg-time float-end text-secondary">2 w</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New customer comments recived</small>
                      </div>
                   </div>
                 </a>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-warning text-warning"><i class="bi bi-droplet-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">New 24 authors<span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24 new authors joined last week</small>
                      </div>
                   </div>
                 </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-primary text-primary"><i class="bi bi-mic-fill"></i></div>
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">Your item is shipped <span class="msg-time float-end text-secondary">7 m</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully shipped your item</small>
                     </div>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-success text-success"><i class="bi bi-lightbulb-fill"></i></div>
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">Defense Alerts <span class="msg-time float-end text-secondary">2 h</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45% less alerts last 4 weeks</small>
                     </div>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-info text-info"><i class="bi bi-bookmark-heart-fill"></i></div>
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span class="msg-time float-end text-secondary">2 w</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New 4 user registartions</small>
                     </div>
                  </div>
                </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                    <div class="notification-box bg-light-bronze text-bronze"><i class="bi bi-briefcase-fill"></i></div>
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span class="msg-time float-end text-secondary">1 mo</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully uploaded all files</small>
                     </div>
                  </div>
                </a>
             </div>
             <div class="p-2">
               <div><hr class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">
                   <div class="text-center">View All Notifications</div>
                 </a>
             </div>
            </div>
          </li>
          </ul>
          </div>
    </nav>
  </header>
   <!--end top header-->
@endsection


@section('main-content')

       <!--start content-->
       <main class="page-content">

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
          <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body">
                 <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                  <div class="w-50">
                    <p>Total Orders</p>
                    <h4 class="">8,542</h4>
                  </div>
                  <div class="w-50">
                     <p class="mb-3 float-end text-success">+ 16% <i class="bi bi-arrow-up"></i></p>
                     <div id="chart1"></div>
                  </div>
                </div>
              </div>
            </div>
           </div>
           <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body">
                 <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                  <div class="w-50">
                    <p>Total Views</p>
                    <h4 class="">12.5M</h4>
                  </div>
                  <div class="w-50">
                     <p class="mb-3 float-end text-danger">- 3.4% <i class="bi bi-arrow-down"></i></p>
                     <div id="chart2"></div>
                  </div>
                </div>
              </div>
            </div>
           </div>
           <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body">
                 <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                  <div class="w-50">
                    <p>Revenue</p>
                    <h4 class="">$64.5K</h4>
                  </div>
                  <div class="w-50">
                     <p class="mb-3 float-end text-success">+ 24% <i class="bi bi-arrow-up"></i></p>
                     <div id="chart3"></div>
                  </div>
                </div>
              </div>
            </div>
           </div>
           <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body">
                 <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                  <div class="w-50">
                    <p>Customers</p>
                    <h4 class="">25.8K</h4>
                  </div>
                  <div class="w-50">
                     <p class="mb-3 float-end text-success">+ 8.2% <i class="bi bi-arrow-up"></i></p>
                     <div id="chart4"></div>
                  </div>
                </div>
              </div>
            </div>
           </div>
        </div><!--end row-->

        <div class="row">
          <div class="col-12 col-lg-6 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0">Revenue</h6>
                  <div class="fs-5 ms-auto dropdown">
                     <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                       <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="#">Action</a></li>
                         <li><a class="dropdown-item" href="#">Another action</a></li>
                         <li><hr class="dropdown-divider"></li>
                         <li><a class="dropdown-item" href="#">Something else here</a></li>
                       </ul>
                   </div>
                 </div>
                <div id="chart5"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center">
                   <h6 class="mb-0">By Device</h6>
                   <div class="fs-5 ms-auto dropdown">
                      <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-3 mt-2 align-items-center">
                  <div class="col-lg-7 col-xl-7 col-xxl-8">
                    <div class="by-device-container">
                       <div class="piechart-legend">
                          <h2 class="mb-1">85%</h2>
                          <h6 class="mb-0">Total Visitors</h6>
                       </div>
                      <canvas id="chart6"></canvas>
                    </div>
                  </div>
                  <div class="col-lg-5 col-xl-5 col-xxl-4">
                    <div class="">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                          <i class="bi bi-tablet-landscape-fill me-2 text-primary"></i> <span>Tablet - </span> <span>22.5%</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                          <i class="bi bi-phone-fill me-2 text-primary-2"></i> <span>Mobile - </span> <span>62.3%</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                          <i class="bi bi-display-fill me-2 text-primary-3"></i> <span>Desktop - </span> <span>15.2%</span>
                        </li>
                      </ul>
                     </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--end row-->


        <div class="row">
          <div class="col-12 col-lg-6 col-xl-4 d-flex">
             <div class="card radius-10 w-100">
               <div class="card-body">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0">Traffic Source</h6>
                  <div class="fs-5 ms-auto dropdown">
                     <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                       <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="#">Action</a></li>
                         <li><a class="dropdown-item" href="#">Another action</a></li>
                         <li><hr class="dropdown-divider"></li>
                         <li><a class="dropdown-item" href="#">Something else here</a></li>
                       </ul>
                   </div>
                 </div>
                 <div id="chart7" class=""></div>
                 <div class="traffic-widget">
                  <div class="progress-wrapper mb-3">
                    <p class="mb-1">Social <span class="float-end">8,475</span></p>
                    <div class="progress rounded-0" style="height: 8px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"></div>
                    </div>
                  </div>
                  <div class="progress-wrapper mb-3">
                    <p class="mb-1">Direct <span class="float-end">7,989</span></p>
                    <div class="progress rounded-0" style="height: 8px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;"></div>
                    </div>
                  </div>
                  <div class="progress-wrapper mb-0">
                    <p class="mb-1">Search <span class="float-end">6,359</span></p>
                    <div class="progress rounded-0" style="height: 8px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;"></div>
                    </div>
                  </div>
                 </div>
               </div>
             </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-4 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="card radius-10 border shadow-none mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Messages</p>
                        <h4 class="mb-0 text-primary">289</h4>
                      </div>
                      <div class="dropdown ms-auto">
                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                        </div>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="javascript:;">Action</a>
                          </li>
                          <li><a class="dropdown-item" href="javascript:;">Another action</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div id="chart8"></div>
                  </div>
                </div>
                <div class="card radius-10 border shadow-none mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">Total Posts</p>
                        <h4 class="mb-0 text-primary">489</h4>
                      </div>
                      <div class="dropdown ms-auto">
                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                        </div>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="javascript:;">Action</a>
                          </li>
                          <li><a class="dropdown-item" href="javascript:;">Another action</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div id="chart9"></div>
                  </div>
                </div>
                <div class="card radius-10 border shadow-none mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1">New Tasks</p>
                        <h4 class="mb-0 text-primary">149</h4>
                      </div>
                      <div class="dropdown ms-auto">
                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                        </div>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="javascript:;">Action</a>
                          </li>
                          <li><a class="dropdown-item" href="javascript:;">Another action</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div id="chart10"></div>
                  </div>
                </div>
              </div>
            </div>
         </div>
         <div class="col-12 col-lg-12 col-xl-4 d-flex">
          <div class="card radius-10 w-100">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <h6 class="mb-0">Visitors</h6>
                <div class="fs-5 ms-auto dropdown">
                   <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="#">Action</a></li>
                       <li><a class="dropdown-item" href="#">Another action</a></li>
                       <li><hr class="dropdown-divider"></li>
                       <li><a class="dropdown-item" href="#">Something else here</a></li>
                     </ul>
                 </div>
               </div>
              <div id="chart11" class=""></div>
              <div class="d-flex align-items-center gap-5 justify-content-center mt-3 p-2 radius-10 border">
                <div class="text-center">
                  <h3 class="mb-2 text-primary">8,546</h3>
                  <p class="mb-0">New  Visitors</p>
                </div>
                <div class="border-end sepration"></div>
                <div class="text-center">
                 <h3 class="mb-2 text-primary-2">3,723</h3>
                 <p class="mb-0">Old  Visitors</p>
               </div>
             </div>
            </div>
          </div>
       </div>
     </div><!--end row-->

     <div class="row">
        <div class="col-12 col-lg-12 col-xl-8 d-flex">
          <div class="card radius-10 w-100">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <h6 class="mb-0">Recent Orders</h6>
                <div class="fs-5 ms-auto dropdown">
                   <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="#">Action</a></li>
                       <li><a class="dropdown-item" href="#">Another action</a></li>
                       <li><hr class="dropdown-divider"></li>
                       <li><a class="dropdown-item" href="#">Something else here</a></li>
                     </ul>
                 </div>
               </div>
               <div class="table-responsive mt-2">
                <table class="table align-middle mb-0">
                  <thead class="table-light">
                    <tr>
                      <th>#ID</th>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Date</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#89742</td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="product-box border">
                             <img src="{{ asset('/') }}admin/assets/images/products/11.png" alt="">
                          </div>
                          <div class="product-info">
                            <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                          </div>
                        </div>
                      </td>
                      <td>2</td>
                      <td>$214</td>
                      <td>Apr 8, 2021</td>
                      <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#68570</td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="product-box border">
                             <img src="{{ asset('/') }}admin/assets/images/products/07.png" alt="">
                          </div>
                          <div class="product-info">
                            <h6 class="product-name mb-1">Sports Time Watch</h6>
                          </div>
                        </div>
                      </td>
                      <td>1</td>
                      <td>$185</td>
                      <td>Apr 9, 2021</td>
                      <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#38567</td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="product-box border">
                             <img src="{{ asset('/') }}admin/assets/images/products/17.png" alt="">
                          </div>
                          <div class="product-info">
                            <h6 class="product-name mb-1">Women Red Heals</h6>
                          </div>
                        </div>
                      </td>
                      <td>3</td>
                      <td>$356</td>
                      <td>Apr 10, 2021</td>
                      <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#48572</td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="product-box border">
                             <img src="{{ asset('/') }}admin/assets/images/products/04.png" alt="">
                          </div>
                          <div class="product-info">
                            <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                          </div>
                        </div>
                      </td>
                      <td>1</td>
                      <td>$149</td>
                      <td>Apr 11, 2021</td>
                      <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#96857</td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="product-box border">
                             <img src="{{ asset('/') }}admin/assets/images/products/10.png" alt="">
                          </div>
                          <div class="product-info">
                            <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                          </div>
                        </div>
                      </td>
                      <td>2</td>
                      <td>$199</td>
                      <td>Apr 15, 2021</td>
                      <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#96857</td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="product-box border">
                             <img src="{{ asset('/') }}admin/assets/images/products/12.png" alt="">
                          </div>
                          <div class="product-info">
                            <h6 class="product-name mb-1">Pro Samsung Laptop</h6>
                          </div>
                        </div>
                      </td>
                      <td>1</td>
                      <td>$699</td>
                      <td>Apr 18, 2021</td>
                      <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-4 d-flex">
          <div class="card radius-10 w-100">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <h6 class="mb-0">Sales By Country</h6>
                <div class="fs-5 ms-auto dropdown">
                   <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="#">Action</a></li>
                       <li><a class="dropdown-item" href="#">Another action</a></li>
                       <li><hr class="dropdown-divider"></li>
                       <li><a class="dropdown-item" href="#">Something else here</a></li>
                     </ul>
                 </div>
               </div>
               <div id="geographic-map" class="mt-2"></div>
               <div class="traffic-widget">
                <div class="progress-wrapper mb-3">
                  <p class="mb-1">United States <span class="float-end">$2.5K</span></p>
                  <div class="progress rounded-0" style="height: 6px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;"></div>
                  </div>
                </div>
                <div class="progress-wrapper mb-3">
                  <p class="mb-1">Russia <span class="float-end">$4.5K</span></p>
                  <div class="progress rounded-0" style="height: 6px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%;"></div>
                  </div>
                </div>
                <div class="progress-wrapper mb-0">
                  <p class="mb-1">Australia <span class="float-end">$8.5K</span></p>
                  <div class="progress rounded-0" style="height: 6px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"></div>
                  </div>
                </div>
               </div>

            </div>
          </div>
        </div>
     </div><!--end row-->

      </main>
   <!--end page main-->

@endsection
