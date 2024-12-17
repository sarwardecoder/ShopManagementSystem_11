<?php
session_start(['cookie_lifetime' => 300,]);
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ('admin' == $_POST['username'] && 'rabbit' == $_POST['password']) {
        // $_SESSION['loggedin'] = true;
        echo "username and password are set";

    } else {
        // $_SESSION['loggedin'] = false;
        echo "username and password are not set";

    }
}
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
        <div class="main ">



            <div class="col-md-12">
                <form class="position-absolute top-50 start-50 translate-middle" action="{{'login'}}">
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="username" id="username"
                            aria-describedby="usernameHelp">
                        <div id="usernameHelp" class="form-text">Enter Your User Name</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <button type="submit" class="btn btn-warning">login</button>
                    <?php
//if the session is true
// if (true == $_SESSION['loggedin']) {
//     echo 'Hallo admin, Du bist Gros';
// } else {
//     echo 'Hallo Stranger!! Please login below!';
// }
// ?>

                </form>
                <!-- <?php
// if the session is false
// if (false == $_SESSION['loggedin']) {

// }

?> -->
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>