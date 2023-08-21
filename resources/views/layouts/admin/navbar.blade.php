<nav class="navbar navbar-expand justify-content-between fixed-top" >
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="{{ route('admin.index') }}">
          <img src="{{ URL::asset('assests/demo/img/logo1.jpeg') }}" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
          Admin of Information Technology Institute
        </a>

        <form class="form-inline form-quicksearch d-none d-md-block mx-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-icon">
                <i data-feather="search"></i>
              </div>
            </div>
            <input type="text" class="form-control" id="search" placeholder="Type to search...">
          </div>
        </form>

        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">

           <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="{{ URL::asset('assests/demo/img/user.png') }}" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">My Tasks</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="#">Sign out</a>
            </div>
          </li>
        </ul>
      </nav>



