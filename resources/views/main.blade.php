<!DOCTYPE html>
<html lang="en">
  <head>
@include('parts.head')
  </head>

  <body>
    @include('parts.navbar')


    <div class="container">

      @yield('main content')

    @include('parts.footer')


    </div>

    @include('parts.javascript')

    @yield('scripts')
  </body>
</html>
