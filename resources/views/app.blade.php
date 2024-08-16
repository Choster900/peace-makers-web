<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <script src="https://www.paypal.com/sdk/js?client-id=AUGENNbM1ME41FmgwO5AuK2ttUkSoonNWpEyCG8mGscJ0XKrRdClhVDzKmJsDoKBGtKWQE_wzBv6IhIP&buyer-country=US&currency=USD&components=buttons&enable-funding=venmo" data-sdk-integration-source="developer-studio"></script>

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    <!-- Contenedor para el botón de PayPal -->


    <script>

    </script>
</body>

</html>
