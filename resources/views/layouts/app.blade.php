@include('partials.header')
<body>
  
{{-- navigation --}}
@include('partials.navigation')

{{-- sidebar --}}
@include('partials.sidebar')

{{-- content --}}
@yield('content')

{{-- js --}}
@include('partials.scripts')

@stack('scripts')
   
</body>
</html>