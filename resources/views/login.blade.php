<?php
session_start(['cookie_lifetime' => 300,])
?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <div class="container">
        <div class="main">
            <div class="col-md-12">
                <form class="position-absolute top-50 start-50 translate-middle">
                    <div class="mb-3">
                        <label for="inputUsername" class="form-label">User Name</label>
                        <input type="username" class="form-control" id="inputUsername" aria-describedby="usernameHelp">
                        <div id="usernameHelp" class="form-text">Enter Your User Name</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword1">
                    </div>

                    <button type="submit" class="btn btn-warning">login</button>
                </form>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>