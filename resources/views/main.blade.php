<!DOCTYPE html>
<html lang="en">
@include('parts.head')


  <body>
    @include('parts.navbar')


    <div class="container">

      @yield('main content')

    @include('parts.footer')


    </div>

    @include('parts.javascript')

    @yield('script')
  </body>
</html>
