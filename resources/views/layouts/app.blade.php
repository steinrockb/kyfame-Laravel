<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/utils.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>

    </head>

    <body class="font-sans antialiased">
        <div class="container">
            <div class="min-h-screen">
                @include('layouts.dashboardNavigation')

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
        </div>
        <footer class=" " ;>
            <div class="container p-4">
                <div class="row">
                    <div class="col-5">
                        <h4>External Links</h4>
                        <ul>
                            <li> <a href="https://jefferson.kctcs.edu/education-training/program-finder/kyfame.aspx">JCTC
                                    FAME</a></li>
                            <li> <a
                                    href="https://students.kctcs.edu/psc/stdsaprd/EMPLOYEE/SA/c/COMMUNITY_ACCESS.K_OLA_LANDING_FL.GBL?&Campus=JFC&">Apply
                                    to JCTC</a></li>
                            <li> <a href="https://fame-usa.com/">USA FAME</a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h4>Site Links</h4>
                        <ul>
                            <li><a href="students">For Students</a></li>
                            <li><a href="sponsers">For Sponsers</a></li>
                            <li><a href="employers">For Employers</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h4>Contact Us</h4>
                        <address>
                            123 street</br>
                            city, state, zip</br>
                            Phone<br>
                            <br>
                            contact name<br>
                        </address>
                    </div>
                </div>

            </div>
            <div class="p-2 bg-dark">
                <p class="text-white text-center">&copy; Copyright 2021 GLKYFAME</p>
            </div>
        </footer>
    </body>

</html>