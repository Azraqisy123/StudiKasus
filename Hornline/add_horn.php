<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e3256899f8.js" crossorigin="anonymous"></script>
    <title>Marching Store</title>
    <link rel="shortcut icon" href="../Image/ico.png">
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Marching Store<span>.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Product</a>
                        <ul class="dropdown-menu bg-dark mt-2">
                            <li><a href="../percussion.php" class="dropdown-text dropdown-item">Percussion</a></li>
                            <li><a href="../hornline.php" class="dropdown-text dropdown-item">Horn Line</a></li>
                    </li>
                </ul>
                </li>
                <li><a class="nav-link" href="about.html">About us</a></li>
                <li><a class="nav-link" href="contact.html">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container border-bottom">
            <div class="intro-excerpt"></div>
            <h1 class="text-center">Tambah Product</h1>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="p-4">
        <div class="row">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <form action="action_add_horn.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="formFileLg" class="form-label">Input Data Gambar</label>
                        <input class="form-control form-control-lg" type="file" name="Nama_Gambar" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1" class="form-label">ID Product</label>
                            <input type="text" class="form-control" name="ID_Produk" required>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Nama Product</label>
                            <input type="text" class="form-control" name="Nama_Produk" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Harga Product</label>
                            <input type="text" class="form-control" name="Harga" required>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Stok Product</label>
                            <input type="text" class="form-control" name="Stok" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Small select example" name="ID_Kategori">
                            <option selected>Pilih Kategori</option>
                            <option value="11">Percussion</option>
                            <option value="12">Hornline</option>
                        </select>
                    </div>
                    <a class="btn btn btn-outline-primary" href="../hornline.php" role="button">Kembali</a>
                    <input type="submit" name="Submit" class="btn btn-primary fw-bold" value="Submit">
                </form>
            </div>
        </div>
    </div>

    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Marching Store<span>.</span></a>
                    </div>
                    <p class="mb-4">Dive into a world where the harmonious blend of premium instruments, accessories,
                        and marching band essentials awaits you.</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Snare Pearl</a></li>
                                <li><a href="#">Quarto Prodict</a></li>
                                <li><a href="#">Bass Drum Harrier</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>
                            <!-- License information: https://untree.co/license/ -->
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->
</body>