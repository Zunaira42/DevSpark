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
            margin-top: -50px;

        }

        .sidebar a {
            color: white;
            display: block;
            margin-block-start: 20px;
            padding: 5px;
            text-decoration: none;
        }

        .profile span {
            color: white;
            margin: 10px 0px;

        }

        .profile button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 27px;
        }

        .profile button:hover {
            background-color: blue;
            color: white;

        }
    </style>
</head>

<body>

    <div class="container-fluid ">
        <div class="profile">
            <div class="row">
                <div class="col-12 ">
                    <div class="main-profile  d-flex justify-content-end">
                        <a href="{{ route('profile.edit') }}">
                            <button type="button">Profile</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <h3>Dashboard</h3>
        <a href="{{ route('products.index') }}"><i class="bi bi-box-seam"></i> Products</a>
        <a href="#"><i class="bi bi-cart-check"></i> Orders</a>
        <a href="#"><i class="bi bi-tags"></i> Categories</a>
        <a href="{{ route('checkouts.index') }}"><i class="bi bi-cart-check"></i> Checkouts</a>
        <a href="#"><i class="bi bi-bar-chart-line"></i> Reports</a>
        <a href="#"><i class="bi bi-gear"></i> Settings</a>
        <a href="{{ route('users.index') }}"><i class="bi bi-person-fill"></i> Users</a>
        <div style="margin-left: 220px; padding: 50px;">
        </div>
        {{-- <a href="{{route('franchies.index')}}">Franchies </a> --}}
    </div>
    <div style="margin-left: 220px; padding: 50px;">
        @yield('content')
    </div>
</body>

</html>
