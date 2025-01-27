
<?php
include_once 'dbconnect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title> Muharib E-BookShop </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="/"> Muharib E-BookShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.html">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="/contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blogs.html">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services.html">Services</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="book1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">


                    <h2>Bengali Books</h2>
                    <p><i>  WE HAVE A VARIETY COLLECTION OF BENGALI BOOKS OF YOUNG AND LEGEND WRITERS.MOST OF THEM ARE POETRY, NOVEL AND MANY MORE...</i></p>
                    <p><a class="btn btn-danger" href="/about.html" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="book3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">


                    <h2>Best Sellers</h2>
                    <p><i> WE HAVE A COLLECTION OF WORLD-WIDE TOP BEST SELLERS BOOKS TOPCS INCLUDING:
                            SCIENCE, BIOGRAPHY, DRAMA AND MANY MORE.....</i></p>
                    <p><a class="btn btn-success" href="/about.html" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="book4.jpeg" class="bd-placeholder-img rounded-circle" width="140" height="140">



                    <h2>PDF</h2>
                    <p><i> WE HAVE COLLECTIONS OF PDF MORE THAN 1 MILLION BOOKS.MOST OF THEM ARE NOVEL, ADVENTURES, DRAMA
                            AND MANY MORE.....</i></p>

                    <p><a class="btn btn-info" href="/about.html" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
    <div class="container mt-3 ">
        <h3>Contact Us For Any Query</h3>
        
        <form class="row g-3 needs-validation" action="insert.php" method="post">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationCustom01" value="" name="fname" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" value=""  name="lname" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="validationCustom03" name="email" required>
                <div class="invalid-feedback">
                    Please provide a valid e-mail
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Comment</label>
                <input type="text" class="form-control" id="validationCustom04" name="comment" required>
                <div class="invalid-feedback">
                    
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
        </form>
    </div>
    <hr>
    </div>

    <footer class="container">
        <p class="float-end">
        <p>© 2020 Muharib, org. · <a href="/">Privacy</a> · <a href="/">Terms</a></p>
        <div class="spinner-grow text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow text-success" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    <div class="spinner-grow text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>

    </footer>
    </div>
</body>

</html>