<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('template/assets/fonts/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/assets/fonts/unicons/css/line.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/admin.css') }}">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>  
        span span.relative.inline-flex.items-center.px-4.py-2.-ml-px.text-sm.font-medium.text-gray-500.bg-white.border.border-gray-300.cursor-default.leading-5 {
            background: #53AF50 !important;
            color: #fff !important;
            border: none !important;
        }
    </style>

</head>

<body>
    {{-- =========================HEADER====================== --}}
    @include('layouts.admin.header-admin')
    {{-- =========================END HEADER====================== --}}

    {{-- =========================SIDEBAR====================== --}}
    @include('layouts.admin.sidebar-admin')
    <!--==============end SIDEBAR ====================-->

    <!--==================== CONTENT ADMIN ====================-->
    @yield('content')
    <!--==================== CONTENT ADMIN ====================-->


    <script src="{{ asset('template/assets/js/admin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
