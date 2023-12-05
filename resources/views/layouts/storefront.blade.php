<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>Pelmeski - Fethiye</title>
    <meta
        name="description"
        content="Example of an ecommerce storefront built with Lunar."
    >
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >
    <script
        defer
        src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <link
        rel="icon"
        href="{{ asset('favicon.svg') }}"
    >
    @livewireStyles

  <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1046038099878043');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1046038099878043&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="antialiased text-gray-900">
    @livewire('components.navigation')

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>

</html>
