<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.admin.head')
    {{-- @yield('css') --}}

  </head>
  <body>
    <div class="adminx-container">
       @include('layouts.admin.navbar')

      <!-- expand-hover push -->
      <!-- Sidebar -->

       @include('layouts.admin.aside')
       <!-- Sidebar End -->
      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            @yield('bread-crumb')

           
           
             @yield('content')

          </div>
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    @include('layouts.admin.script')
    @yield('js')

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.vanilla.js"></script-->
  </body>
</html>
