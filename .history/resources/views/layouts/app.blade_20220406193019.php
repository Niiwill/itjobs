<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin IT-Poslovi') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @stack('css')

        @livewireStyles

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="csrf-token" content="{{ csrf_token() }}">

          <title>{{ config('app.name', 'Admin IT-Poslovi') }}</title>          
          <!-- Favicon -->
          <link rel="shortcut icon" href="../assets/images/favicon.ico" />
          
          <!-- Library / Plugin Css Build -->
          <link rel="stylesheet" href="../assets/css/core/libs.min.css" />
          
          <!-- Aos Animation Css -->
          <link rel="stylesheet" href="../assets/vendor/aos/dist/aos.css" />
          
          <!-- Hope Ui Design System Css -->
          <link rel="stylesheet" href="../assets/css/hope-ui.min.css?v=1.1.2" />
          
          <!-- Custom Css -->
          <link rel="stylesheet" href="../assets/css/custom.min.css?v=1.1.2" />
          
          <!-- Dark Css -->
          <link rel="stylesheet" href="../assets/css/dark.min.css"/>
          
          <!-- RTL Css -->
          <link rel="stylesheet" href="../assets/css/rtl.min.css"/>
          
          <!-- Customizer Css -->
          <link rel="stylesheet" href="../assets/css/customizer.min.css" />
      </head>
    <style type="text/css">
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('{{asset('storage/img/preloader.gif')}}') center no-repeat #fff;
        }
    </style>
    <body class="font-sans antialiased">
        <div class="se-pre-con"></div>
        <div class="min-h-screen bg-gray-100">
            @livewire('admin-nav')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        
        @stack('scripts')
        <script type='text/javascript'>
            $(window).on('load',function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>
    </body>
</html>
