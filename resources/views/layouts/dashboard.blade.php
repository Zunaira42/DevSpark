<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Dashboard</title>
    @stack('style')

    <style>
        .sidebar {
            color: white;
            background-color: black;
            height: 200vh;
            width: 200px;
            padding: 30px;
            position: fixed;
        }

        .sidebar a {
            color: white;
            display: block;
            margin-block-start: 20px;
            padding: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
{{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div class="sidebar">
        <h3>Dashboard</h3>
        <a href="{{route('products.index')}}"><i class="bi bi-box-seam"></i> Products</a>
        <a href="#"><i class="bi bi-cart-check"></i> Orders</a>
        <a href="#"><i class="bi bi-tags"></i> Categories</a>
         <a href="#"><i class="bi bi-people"></i>  Customers</a>
    <a href="#"><i class="bi bi-bar-chart-line"></i> Reports</a>
    <a href="#"><i class="bi bi-gear"></i> Settings</a>
    <div style="margin-left: 220px; padding: 50px;">
    </div>
        {{-- <a href="{{route('franchies.index')}}">Franchies </a> --}}
    </div>
    <div style="margin-left: 220px; padding: 50px;">
        @yield('content')
    </div>
</body>

</html>


