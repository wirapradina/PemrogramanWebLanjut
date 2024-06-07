<?php
$active_page = 'dashboard';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link:hover {
            background-color: #E1AA74;
            color: #fff;
        }
        
        .nav-link.active {
            background-color: #E1AA74 !important;
            color: #fff !important;
        }

        body {
            background-color: #F3F0CA;
        }
        /* Styling for the logo and text in the sidebar */
        .fs-4 {
            display: flex;
            align-items: center;
            font-weight: bold; /* Menjadikan tulisan bold */
            font-size: 1.2rem; /* Menjadikan tulisan lebih besar */
        }

        .fs-4 img {
            margin-right: 20px;
            vertical-align: middle;
        }

        .text-bg-dark {
            background-color: #304D30 !important; /* Ganti dengan warna yang diinginkan */
            color: #ffffff !important; /* Ganti dengan warna teks yang kontras */
        }




    </style>
</head>
<body class="d-flex">
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; min-height: 100vh;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 ">
            <img src="/project_uas/assets/logomotor.png" alt="Logo" width="50" height="50">
            Rental Motor
            </span>

        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="<?php echo base_url('index.php/data_motor'); ?>" class="nav-link text-white">Data Motor</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('index.php/sewa'); ?>" class="nav-link text-white">Data sewa</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('index.php/customer'); ?>" class="nav-link text-white">Customer</a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>admin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="http://localhost/project_uas/index.php/welcome/index">Sign out</a></li>
            </ul>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="container mt-3">
        <h2>Dashboard</h2>
        <p>Welcome to the Dashboard of Rental Motor.</p>
        <!-- Isi dengan konten dashboard sesuai kebutuhan -->
    </div>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
