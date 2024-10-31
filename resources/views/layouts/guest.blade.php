
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">



        <link rel="stylesheet" href="{{asset('assets\vendor\css\core.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets\vendor\css\theme-semi-dark.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets\vendor\libs\flatpickr\flatpickr.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}} " /><link rel="stylesheet" href="{{asset('assets/css/estilos.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/estilos.css')}}" />
        <title>{{ $metaTitle  ?? 'MC Design' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <div class="layout-page">
                    <nav class="layout-navbar navbar">
                        @include('layouts.nav-head')
                    </nav>
                    <div class="content-wrapper">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            {{ $slot }}
                        </div>
                        
                    </div>
                    <footer class="content-footer footer bg-footer-theme">
                            <div class="footer-top container-xxl">
                                &copy; Mauricio Casado <?php echo date("Y");?>
                            </div>
                        </footer>
                </div>
            </div>
        </div>
    </body>
</html>
