<nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none"><img src="{{asset('images/mswdo-logo.png')}}" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
           
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
             
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="{{Auth::user()->profile_picture == !null ? asset('/profiles/'.Auth::user()->profile_picture) : asset('/images/faces/no-profile.jpg') }}" />
                  <span class="profile-name">{{{Auth::user()->first_name . ' ' . Auth::user()->last_name}}}</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="{{route('edit-profile' , Auth::user()->id)}}">
                    <i class="mdi mdi-cached mr-2 text-success"></i>Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="mdi mdi-logout mr-2 text-primary"></i> Signout
                               </a>
                            
                        </form>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
