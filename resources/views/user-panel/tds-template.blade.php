<!DOCTYPE html>
<html lang="en">
  <head>

    <x-user.head />

    @yield('seo')

  </head>
  <body>

    <x-user.header />
    
    <x-user.alert.all/>

    @yield('main')

    <x-user.top-button />

    <x-user.footer />

    <x-user.script />

  </body>
</html>
