<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>{{ config('app.name', 'ISYRES') }} @yield('title')</title>
    
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>


{{-- load css style --}}
@include('mlayouts.partials.scriptcss')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

{{-- sidebar left --}}
@include('mlayouts.partials.sidebar')
            
<!-- top navigation -->
@include('mlayouts.partials.topbar')
        <!-- page content -->

{{-- @if (Auth::check()) 
{{-- top tiles under nav top bar --}}
{{-- @include('layouts.partials.toptiles')
@endif --}} 

{{-- place of content --}}
@yield('main_container')
{{-- @include('layouts.partials.smartjs') --}}


        <!-- footer content -->
        <footer>
          <div class="pull-right">
             <a href="/"><i class="fa fa-leaf"> ISYRES</a></i> - Information Systems Research Service <i class="fa fa-copyright"> {{date('Y')}}</i>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

   @include('mlayouts.partials.scriptjs')
	
  </body>
</html>
