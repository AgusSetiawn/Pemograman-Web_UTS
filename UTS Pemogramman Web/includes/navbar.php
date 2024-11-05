<nav class="navbar fixed-top bg-primary navbar-expand-md" data-bs-
    theme="dark">
    <div class=" container-fluid">
        <a class="navbar-brand text-light" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link active text-light" aria-current="page" href="?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="?page=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="?page=contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        "Navbar Item Tambahan Untuk Tugas UTS"
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=tabel">Datatables</a></li>
                        <li><a class="dropdown-item" href="?page=form">Form</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="?page=something">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search" action="search.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="page">
                <button class="btn custom-btn" type="submit">Search</button>
            </form>
        </div>
    </div>
    <style>
        .custom-btn {
            background-color: #606060;
            color: white;

        }
    </style>
</nav>