<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <title>{{ config('app.name', 'Admin IT-Poslovi') }}</title>          
          <!-- Favicon -->
          {{-- <link rel="shortcut icon" href="../assets/images/favicon.ico" /> --}}
          
          <!-- Library / Plugin Css Build -->
          <link rel="stylesheet" href="{{ asset('css/core/libs.min.css') }}"/>
          
          {{-- <!-- Aos Animation Css -->
          <link rel="stylesheet" href="{{ asset('css/hope-ui.min.css?v=1.1.2') }}" href="../assets/vendor/aos/dist/aos.css" /> --}}
          
          <!-- Hope Ui Design System Css -->
          <link rel="stylesheet" href="{{ asset('css/hope-ui.min.css?v=1.1.2') }}" />
          
          <!-- Custom Css -->
          <link rel="stylesheet" href="{{ asset('css/custom.min.css?v=1.1.2') }}" />  
          
          <!-- Customizer Css -->
          <link rel="stylesheet" href="{{ asset('css/customizer.min.css') }}" />

          <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @stack('css')
      </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            {{-- <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        
        @stack('scripts')
    </body>
</html>
