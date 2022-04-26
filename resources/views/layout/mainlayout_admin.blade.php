<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.partials.head_admin')
</head>
<body>
@if(!Route::is(['login','register','forgot-password']))
@include('layout.partials.header_admin')
@include('layout.partials.nav_admin')
@endif
@yield('content')
@include('layout.partials.footer_admin-scripts')
  </body>
</html>