<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMDHN Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

    <main>
        <div class="nav">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <i data-feather="book-open"></i>
                            Artikel
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="clipboard"></i>
                            Event
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="image"></i>
                            Galeri Foto
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="users"></i>
                            Klien Kami
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                        id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="1.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>rmdhn</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i data-feather="log-out"></i>Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <header
                class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="#" class="align-items-center text-dark text-decoration-none">
                    <img src="2.jpeg" alt="" width="77" height="77" class="rounded-circle mr-1">
                    RMDHN Company
                </a>
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#home" class="nav-link px-2 link-dark">Home</a></li>
                    <li><a href="#profile" class="nav-link px-2 link-dark">Profile</a></li>
                    <li><a href="#visi" class="nav-link px-2 link-dark">Visi dan Misi</a></li>
                    <li><a href="#product" class="nav-link px-2 link-dark">Produk Kami</a></li>
                    <li><a href="#contact" class="nav-link px-2 link-dark">Kontak Kami</a></li>
                    <li><a href="#about" class="nav-link px-2 link-dark">About Us</a></li>
                </ul>

                <div class="navbar-extra">
                    <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
                </div>
            </header>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>
    <script src="script.js"></script>
</body>

</html>