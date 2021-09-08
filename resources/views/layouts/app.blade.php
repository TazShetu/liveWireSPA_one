<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'LiveWireSPA One')
    </title>
    <link rel="shortcut icon" href="{{asset('favicon.jpg')}}"/>
    @yield('link')
    <link href="{{asset('Vendor/css/bootstrap5.css')}}" rel="stylesheet">
    @livewireStyles
    {{--  custome css  --}}
</head>
<body>
@livewire('partial.navbar')

{{--Route Components View will be yielded in $slot--}}
{{ $slot }}

<script src="{{asset('Vendor/js/bootstrap5.js')}}"></script>
@yield('script')
<script src="{{asset('js/app.js')}}"></script>
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>
</html>
