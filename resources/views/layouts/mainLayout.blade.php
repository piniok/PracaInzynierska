<!DOCTYPE html>
    <html lang="en">
     <head>
     <div id="loadOverlay" style="background-color:#333; 
     position:absolute; top:0px; left:0px; width:100%; 
     height:100%; z-index:2000;"></div>
     <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       @include('layouts.partials.head')
     </head>
     </script>
     <body class="bodybg">
     
    @include('layouts.partials.nav')
    @include('layouts.partials.Header')
    @yield('content')
  
    @include('layouts.partials.footer')
    @include('layouts.partials.footer-scripts')
     </body>
    </html>
   