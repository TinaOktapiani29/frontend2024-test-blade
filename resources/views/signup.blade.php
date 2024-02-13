<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/bg.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
</head>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-4">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block "></div> -->
                            <div class="col-lg-8">
                                <div class="p-">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sign Up</h1>
                                    </div>
                                    <form class="user">
                                        <label>Email</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                id="Email" aria-describedby="emailHelp"
                                                placeholder="Enter Your Email ">
                                        </div>
                                        <label>Password</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                id="Password" placeholder="Create Your Password">
                                        </div>
                                        <label>Confirm Password</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                id="confirm-Password" placeholder="Confirm your Password">
                                        </div>
                                        <center>
                                            <button type="submit" id="sign-up" class="btn btn-dark">
                                                Sign Up
                                            </button>
                                        </center>
                                    
                                    </form>
                                    <hr>
                                    
                                    <div class="text-center">
                                        <caption>Already Registered? </caption><a class="small" href="#">Sig in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
        $('#sign-up').hover(function() {
            $(this).css("background-color:","gray");
        }, function(){
            $(this).css("backgorund-color", "#4169E1")
        });

    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>