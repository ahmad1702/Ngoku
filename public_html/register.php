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
            <div class="card my-5 formcard">
                <div class="card-body d-flex flex-column justify-content-center">

                    <form id="register_form" class="p-5" onsubmit="return false" autocomplete="off">
                        <h5 class="card-title display-5" style="font-weight: 800">Register</h5>
                        <div class="form-group mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input class="form-control" name="fullname" id="fullname" placeholder="Johnny Appleseed">
                            <small id="u_error" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email"
                                aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="e_error" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1"
                                placeholder="Password">
                                <small id="p1_error" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password2">Re-enter Password</label>
                            <input type="password" class="form-control" id="password2"
                                placeholder="Password">
                                <small id="p2_error" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group mb-4">
                            <label for="usertype">Usertype</label>
                            <select class="form-control" id="usertype">
                                <option value="">Choose User Type</option>
                                <option value="1">User</option>
                                <option value="0">Admin</option>
                            </select>
                            <small id="t_error" class="form-text text-muted"></small>
                        </div>
                        <div class="buttons">
                            <button type="submit" class="btn btn-primary d-flex align-items-center"
                                style="margin-right: 1rem; padding-right: 1rem;">
                                <ion-icon name="checkmark-done-circle-outline" style="margin-right: 0.25rem"></ion-icon>Register
                            </button>
                            <!-- <ion-icon name="key-outline" style="margin-right: 0.25rem"></ion-icon> -->
                            <button type="submit" class="btn btn-outline-primary">or Log-In</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="card-footer text-muted">
                    <a href="#">Forgot password?</a>
                </div> -->
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