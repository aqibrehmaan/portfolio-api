<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Portfolio</title>

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('dash-assets') }}/media/favicons/favicon.ico">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('dash-assets') }}/media/favicons/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dash-assets') }}/media/favicons/favicon.ico">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{ asset('dash-assets') }}/css/oneui.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
        @yield('css')

        @livewireStyles


    </head>
    <body>
        <!-- Page Container -->
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

            @include('dashboard.partials.sidebar')
            @include('dashboard.partials.header')

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>

            @include('dashboard.partials.footer')

        </div>
        <!-- END Page Container -->



        {{-- <script src="{{ asset('dash-assets') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('dash-assets') }}/js/core/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('dash-assets') }}/js/core/simplebar.min.js"></script>
        <script src="{{ asset('dash-assets') }}/js/core/jquery-scrollLock.min.js"></script>
        <script src="{{ asset('dash-assets') }}/js/core/jquery.appear.min.js"></script>
        <script src="{{ asset('dash-assets') }}/js/core/js.cookie.min.js"></script>
        <script src="{{ asset('dash-assets') }}/js/oneui.core.min.js"></script> --}}

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_js/main/app.js
        -->

        <script src="{{ asset('dash-assets') }}/js/oneui.core.min.js"></script>
        <script src="{{ asset('dash-assets') }}/js/oneui.app.min.js"></script>
        @yield('scripts')
        @stack('modals')

        @livewireScripts

        @stack('scripts')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </body>
</html>
