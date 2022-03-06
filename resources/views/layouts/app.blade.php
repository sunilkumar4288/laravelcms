<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('dist/css/app.css')) }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://bootstrapthemes.co/demo/resource/bootstrap-4-multi-dropdown-hover-navbar/css/bootstrap-4-hover-navbar.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    @hasSection('canonical')<link rel="canonical" href="@yield('canonical')">@endif
    <script src="{{ asset(mix('dist/js/app.js')) }}"></script>
    @if (env('APP_ENV') !== 'local' && config('settings.analytics_id') !== null)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('settings.analytics_id') }}"></script>
        <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', '{{ config('settings.analytics_id') }}', {'anonymize_ip': true});</script>
    @endif
</head>
<body>
@include('partials.app.nav')
@yield('content')
@hasSection('scripts')@yield('scripts')@endif
</body>
</html>
