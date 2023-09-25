<!doctype html>
<html lang="en" data-bs-theme="auto">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Teguh Hadiwijaya">
        <title>{{ $title }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
        <link href="/css/dashboard.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
                display: none;
            }
        </style>

        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    </head>

    <body>

        @include('dashboard.layouts.header')

        <div class="container-fluid">
            <div class="row">
                @include('dashboard.layouts.sidebar')

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('container')
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/dashboard.js"></script>
    </body>

</html>
