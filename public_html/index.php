<!doctype html>
<html lang="en">

    <head>
        <title>Ngoku</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <!-- Navbar -->
        <?php include_once("./templates/header.php"); ?>

        <section class="d-flex flex-column align-items-center justify-content-center w-100" style="">
            <?php 
                if ((isset($_REQUEST["msg"])) AND !empty($_GET["msg"])) {
                    ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $_REQUEST["msg"]; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                }
            ?><br />
            <div class="text-light"><b>Parse error</b>: syntax error, unexpected token &quot;}&quot;, expecting
                &quot;,&quot; or &quot;;&quot; in
                <b>/Applications/MAMP/htdocs/Ngoku/public_html/includes/process.php</b> on line <b>11</b><br /></div>
            <div class="card my-5" style="width: 50%;">
                <img class="card-img-top top-half"
                    src="https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2865&q=80"
                    alt="Card image cap">
                <div class="card-body d-flex flex-column justify-content-center p-5">
                    <h5 class="card-title display-5" style="font-weight: 800">Login</h5>
                    <form id="login_form" onsubmit="return false">
                        <div class="form-group mb-3">
                            <label for="log_email">Email address</label>
                            <input type="email" class="form-control" id="log_email" name="log_email"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="log_pass">Password</label>
                            <input type="password" class="form-control" id="log_pass" name="log_pass"
                                placeholder="Password">
                            <small id="p_error" class="form-text text-danger"></small>
                        </div>
                        <!-- <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="rememberme">
                            <label class="form-check-label" for="rememberme">Remember Me</label>
                        </div> -->
                        <div class="buttons">
                            <button type="submit" class="btn btn-primary d-flex align-items-center"
                                style="margin-right: 1rem; padding-right: 1rem;">
                                <ion-icon name="log-in" style="margin-right: 0.25rem"></ion-icon>Submit
                            </button>
                            <a href="register.php" class="btn btn-outline-primary">Register</a>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <a href="#" style="color: white">Forgot password?</a>
                </div>
            </div>
        </section>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <!-- Ionic Icons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script src="./js/main.js"></script>
    </body>

</html>