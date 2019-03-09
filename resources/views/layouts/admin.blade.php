<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <script src="{{ asset('js/all.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        @include('admin.components.header')
        <div class="app-body" id='app'>
            @include('admin.components.sidebar')
            <main class="main">
                @include('admin.components.breadcrumb')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
                    @include('admin.components.aside')
        </div>
        @include('admin.components.footer')

@stack('js')
</body>
</html>


