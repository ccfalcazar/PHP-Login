<?php
ini_set('session.gc_maxlifetime', 1800);
session_start();

    if(!$_SESSION['isLoggedIn'])
    {
        header("Location: Login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Welcome/CSS/Welcome.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body>
    <div class="container-fluid row m-0 p-0">
            <div id="left-filler" class="col-sm-4"></div>
            <div class="col-sm d-flex min-vh-100 align-items-center justify-content-center">
                <div class="card w-75 shadow p-3 mb-5 bg-white rounded">
                    <div id="header" class="card-header bg-white p-0 pb-2 row">
                        <div class="col-xl-4 text-md-left">
                            <img id="Logo" src="Image/Logo.png" class="rounded-0 card-img" alt="">
                        </div>
                        <div class="col-xl-8 text-md-end">
                            <p id="date" class="m-0 p-0 lead"></p>
                            <p id="time" class="lead m-0 p-0"></p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="text-start col-sm">
                                <p id="name" class="m-0 p-0"><?php echo $_SESSION['username']; ?></p>
                                <p id="status" class="lead m-0 p-0">Status: Logged Out</p>
                            </div>
                            <div class="justify-content-end col-sm d-flex">
                                <button id="Login" type="button" class="btn btn-primary"><small><i class="bi bi-clock"></i></small></button>    
                            </div>
                        </div>
                        <div class="text-center mt-5">
                        <button id="SignOut" type="button" class="btn btn-sm btn-outline-danger">Sign Out</button>                            
                        </div>
                    </div>  
                </div>
            </div>
            <div id="right-filler" class="col-sm-4"></div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="Welcome/JS/Welcome.js"></script>
    </body>
</html>