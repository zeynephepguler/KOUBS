<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  @include('layouts.baglantılar')
  </head>
  <body>
    <center>
      <div >
        @include('layouts.header')
      </div>

        <div >
          @yield('content')
        </div>
        <div >
          @include('layouts.footer')
        </div>

  </body>
</html>
