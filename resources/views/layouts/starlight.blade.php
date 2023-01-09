
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Education Management- @yield('title')</title>

    <!-- vendor css -->
    <link href="{{asset('dashboard_assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_assets/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_assets/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('dashboard_assets/css/starlight.css')}}">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><img src="{{asset('public/uploads/users/RRR.jpg')}}" class="wd-32 rounded-circle" alt="Company logo" style="width: 50%; max-width:50px;"/></i>Pedagogy
    </a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{url('/home')}}" class="sl-menu-link @yield('active')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Home Info</span>
          </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/home')}}" class="nav-link">Home</a></li>
        </ul>
          </a><!-- sl-menu-link -->
          <a href="#" class="sl-menu-link @yield('about')">
          <div class="sl-menu-item">
            <i class="fa-solid fa-address-card"></i>
            <span class="menu-item-label">About Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>
        </ul>
          </a><!-- sl-menu-link -->
          <a href="#" class="sl-menu-link @yield('education')">
          <div class="sl-menu-item">
            <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Education Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
          <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/education')}}" class="nav-link">Add Education</a></li>
          </ul>
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('fact')">
          <div class="sl-menu-item">
           <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Fact Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/fact')}}" class="nav-link">Add Fact</a></li>
          </ul>
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('message')">
          <div class="sl-menu-item">
           <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Message Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/message')}}" class="nav-link">Add Message</a></li>
          </ul>
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('testimonial')">
          <div class="sl-menu-item">
           <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Testimonial Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
          <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/testimonial')}}" class="nav-link">Add Testimonial</a></li>
          </ul>
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('area')">
          <div class="sl-menu-item">
            <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Area Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/area')}}" class="nav-link">Add Area</a></li>
           </ul>
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('social')">
          <div class="sl-menu-item">
            <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Social Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/social')}}" class="nav-link">Add Social</a></li>
           </ul>
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('service')">
          <div class="sl-menu-item">
           <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Service Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
          <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/service')}}" class="nav-link">Add Service</a></li>
          </ul>
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('introduction')">
          <div class="sl-menu-item">
           <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Introduction Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
          <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/introduction')}}" class="nav-link">Add Introduction</a></li>
          </ul>
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('blog')">
          <div class="sl-menu-item">
          <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Blog Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/blog')}}" class="nav-link">Add Blog</a></li>
        </ul>
        </a><!-- sl-menu-link -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('logo')">
          <div class="sl-menu-item">
          <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Logo Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/logo')}}" class="nav-link">Add Logo</a></li>
        </ul>
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('sponsor')">
          <div class="sl-menu-item">
          <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Sponsor Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/sponsor')}}" class="nav-link">Add Sponsor</a></li>
        </ul>
        </a><!-- sl-menu-link -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('banner')">
          <div class="sl-menu-item">
          <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Banner Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/banner')}}" class="nav-link">Add Banner</a></li>
        </ul>
        </a><!-- sl-menu-link -->
          <a href="#" class="sl-menu-link @yield('contact')">
          <div class="sl-menu-item">
            <i class="fa-solid fa-align-left"></i>
            <span class="menu-item-label">Contact Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
           <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Add Contact</a></li>
        </ul>
       </div><!-- sl-sideleft -->
    </ul>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

 <!-- ########## START: HEAD PANEL ########## -->
 <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{Auth::user()->name}}</span>
              <img src="{{asset('public/uploads/users')}}/{{Auth::user()->photo}}" class="wd-32 rounded-circle" alt="">
             </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{url('/profile/edit')}}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li>
                   <a href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Sign Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
               </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('uploads/users/RRR.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Demmo 1</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('uploads/users/8.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Demmo 2</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('uploads/users/12.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Demmo 3</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('uploads/users/R.png')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Demmo 4</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('uploads/users/9.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Demmo 5</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('dashboard_assets/img/img8.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('dashboard_assets/img/img9.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('dashboard_assets/img/img10.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('dashboard_assets/img/img5.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('dashboard_assets/img/img8.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('dashboard_assets/img/img10.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('dashboard_assets/img/img9.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('dashboard_assets/img/img5.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    @yield('content')

    <script src="{{asset('dashboard_assets/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('dashboard_assets/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('dashboard_assets/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('dashboard_assets/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('dashboard_assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('dashboard_assets/js/starlight.js')}}"></script>
    </body>
</html>
