<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.rtl.min.css" 
    integrity="sha384-CfCrinSRH2IR6a4e6fy2q6ioOX7O6Mtm1L9vRvFZ1trBncWmMePhzvafv7oIcWiW" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid d-flex flex-column vh-100">
        <div class="row flex-shrink-0 vh-10">
            <div class="col-md-6 border py-2">
                HEADER KIRI
            </div>
            <div class="col-md-6 border py-2">
                HEADER KANAN
            </div>
        </div>
        <div class="row flex-grow-1 vh-80 overflow-auto">
            <div class="col-md-4 border">
                @section('sidebar')
                    @include('main.nav')
                @show
            </div>
            <div class="col-md-4 border">
                @yield('content')
            </div>
            <div class="col-md-4 border">
                @section('sidebar')
                    @include('main.nav')
                @show
            </div>
        </div>
        <div class="row flex-shrink-0 vh-10">
            <div class="col-md-12 border">
                Footer
            </div>
        </div>
    </div>
</body>
</html>