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

        <section class="py-5" style="">
            <div class="container mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top top-half"
                                src="https://images.unsplash.com/photo-1551095961-f859adf0bb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Profile</h5>
                                <p class="card-text">Michael Jordan</p>
                                <p class="card-text">Admin</p>
                                <p class="card-text">Last Login: xxxx-xx-xx</p>
                                <br>
                                <a href="#" class="btn btn-primary">
                                    <ion-icon name="create"></ion-icon>Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-5 h-100 customjumbo">
                            <div class="container d-flex flex-column justify-content-between h-100">
                                <div>
                                    <h1 class="display-3">Welcome Admin,</h1>
                                    <!-- <p class="lead">Have a nice day</p> -->
                                    <hr class="my-2">
                                </div>
                                <!-- <p>Admin actions:</p> -->
                                <!-- <div>
                                    <p>More info</p>
                                    <p class="lead">
                                        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo
                                            action name</a>
                                    </p>
                                </div> -->
                                <div class="col-sm-6 h-100">
                                    <div class="card h-75" style="border-radius: 1rem;">
                                        <div class="card-body h-100 d-flex flex-column justify-content-between">
                                            <div>
                                                <div></div>
                                                <h4 class="card-title">New Orders</h4>
                                                <p class="card-text">Here you can make invoices and create new orders
                                                </p>
                                            </div>
                                            <a href="#" class="btn btn-primary">New Orders</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p></p>
            <p></p>
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body" style="width: 20rem;">
                                <h4 class="card-title">Categories</h4>
                                <p class="card-text">Here you can manage your categories and add a new parent or
                                    subcategories</p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_category">Add</a>
                                <a href="#" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body" style="width: 20rem;">
                                <h4 class="card-title">Brands</h4>
                                <p class="card-text">Here you can manage your brands and add a new brand</p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_brand">Add</a>
                                <a href="#" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body" style="width: 20rem;">
                                <h4 class="card-title">Products</h4>
                                <p class="card-text">Here you can manage your products and add a new product</p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_products">Add</a>
                                <a href="#" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Category Form -->
        <?php include_once("./templates/category.php"); ?>
        <!-- Brand Form -->
        <?php include_once("./templates/brand.php"); ?>
        <!-- Product Form -->
        <?php include_once("./templates/products.php"); ?>


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