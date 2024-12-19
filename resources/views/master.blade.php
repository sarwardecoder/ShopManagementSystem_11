<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Employee Management </title>

    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300&display=swap"
        rel="stylesheet">


    <!-- link up -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

    <!-- navigation part start -->
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="" alt="">HRMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/index">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="employee">Employee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sales">Sales</a>
                        </li>
                    </ul>
                    <button class="login"> <a class="nav-link" href="login">Login</a></button>
                </div>
            </div>
        </nav>
    </header>

    <body>

        @yield('content')


        <!-- sec seven part end -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>
    </body>

</html>