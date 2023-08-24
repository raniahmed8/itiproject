<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.front.head')
</head>
<body>
     <!-- Spinner Start -->
    @include('layouts.front.spinner')
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.front.nav')
      <!-- Navbar End -->
      @yield('content')
      <!-- Footer Start -->
      @include('layouts.front.footer')
       <!-- Footer End -->


    <!-- Back to Top -->
    @include('layouts.front.script')
</body>
</html>
