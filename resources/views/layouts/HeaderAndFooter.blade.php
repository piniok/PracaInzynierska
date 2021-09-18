<!DOCTYPE html>
<html lang="en">
    <head>
       @include('layouts.partials.head')
     </head>
         <body class="bodybg">
         @include('layouts.partials.nav')
         @yield('content')
        @include('layouts.partials.footer')
         @include('layouts.partials.footer-scripts')
         </body>
</html>