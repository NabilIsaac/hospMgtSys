@include('partials.header')
<body>
  
{{-- navigation --}}
@if(Request::is('admin*'))
    @include('partials.navigation')
@endif

{{-- sidebar --}}
@if(Request::is('admin*'))
    @include('partials.sidebar')
@endif

{{-- content --}}
@yield('content')

{{-- js --}}
@include('partials.scripts')

@stack('scripts')
   
</body>
</html>