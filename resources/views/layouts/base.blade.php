<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? $title.' | ' : '' }}{{ config('app.name') }}</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            @include('layouts._sidebar')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    @include('layouts._navbar')
                        <!-- Begin Page Content -->
                        <div class="container-fluid">
                        <!-- Page Heading -->
                            <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
                            
                            <div id="app">
                                @yield('main')
                            </div>

                        </div>
                        <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                @include('layouts._footer')
            </div>
            <!-- End of Content Wraper -->
        </div>
        <!-- End of Page Wrapper -->

        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>