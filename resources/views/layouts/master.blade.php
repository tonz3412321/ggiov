<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._header');
      <style>
          .justify{
              text-align: justify;
              text-justify: inter-word;
          }
      </style>
    @yield('custom_css')
  </head>
  <body>
      @include('partials._navbar');
      @yield('banner')
      @yield('')

      <div class="container">
        @yield('main-content')
      </div>
      @include('partials._footer');

      @include('partials._javascripts');
      @yield('custom_javascripts')

  </body>
</html>