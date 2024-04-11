<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Login/CSS/Login.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body>
        <div class="container-fluid row">
            <div id="left-filler" class="col-sm-3"></div>
            <div class="col-sm-6 min-vh-100 d-flex align-items-center justify-content-center">
                <div class="card w-75 shadow p-3 mb-5 bg-white rounded">
                    <div id="header" class="card-header bg-white p-0 pb-2 row">
                        <div class="col-xl-4 justify-content-start">
                            <img class="card-img rounded-0 img-fluid" src="Image/Logo.png"> 
                        </div>
                        <div class="lead mt-auto pt-2 justify-content-end text-xl-end text-center col-xl-8">User Credentials</div>
                    </div>
                    <div class="card-body mt-3">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="UserName">
                            <label for="UserName">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="password" id="Password">
                            <label for="Password">Password</label>
                        </div>
                        <div id="message"></div>
                        <div class="col-sm-12 d-flex justify-content-center">
                            <button id="btn-login" type="button" class="btn btn-secondary">Sign In</button>
                        </div>
                    </div>
                </div>  
            </div>
            <div id="right-filler" class="col-sm-3"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="Login/JS/Login.js"></script>
    </body>
</html> 