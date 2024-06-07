<?php
$active_page = 'datasewa';
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
        .fs-4 {
            display: flex;
            align-items: center;
            font-weight: bold; 
            font-size: 1.2rem; 
        }

        .fs-4 img {
            margin-right: 20px;
            vertical-align: middle;
        }

        .text-bg-dark {
            background-color: #304D30 !important; 
            color: #ffffff !important; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
            background-color: #125C13 !important;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #125C13 !important;
            color: #fff !important;
            font-weight: bold;
        }
        .btn-tambah {
            background-color: #304D30; /* Warna latar belakang */
            color: #fff; /* Warna teks */
            border: none; /* Hapus border jika tidak diinginkan */
        }

        .btn-tambah:hover {
            background-color: #748E63; /* Warna latar belakang saat hover */
            color: #fff; /* Warna teks saat hover */
        }

        /* Gaya tambahan jika dibutuhkan */
        .btn-tambah:focus,
        .btn-tambah:active {
            box-shadow: none; /* Hapus efek bayangan saat focus atau active jika tidak diinginkan */
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
                <a href="<?php echo base_url('index.php/sewa'); ?>" class="nav-link text-white <?php echo ($active_page == 'datasewa') ? 'active' : ''; ?>">Data sewa</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('index.php/customer'); ?>" class="nav-link text-white">Customer</a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>admin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="http://localhost/project_uas/index.php/welcome/index">Sign out</a></li>
            </ul>
        </div>
    </div>

    <div class="container mt-3">
    <h2>Data Sewa Motor</h2>
    <a href="<?php echo base_url('index.php/sewa/sewa'); ?>" class="btn btn-tambah mb-3">Tambah Data Sewa</a>

    <!-- Table to display sewa data -->
    <table class="table">
        <thead>
            <tr>
                <th>ID Sewa</th>
                <th>NIK Penyewa</th>
                <th>Nama Penyewa</th>
                <th>Plat Motor</th>
                <th>Nama Motor</th>
                <th>Lama Sewa (days)</th>
                <th>Harga</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sewa_data as $sewa): ?>
                <tr>
                    <td><?php echo $sewa->Id_sewa; ?></td>
                    <td><?php echo $sewa->NIK_Penyewa; ?></td>
                    <td><?php echo $sewa->Nama_Penyewa; ?></td>
                    <td><?php echo $sewa->Plat_Motor; ?></td>
                    <td><?php echo $sewa->Merk_Tipe_Motor; ?></td>
                    <td><?php echo $sewa->Lama_Sewa_Hari; ?></td>
                    <td><?php echo $sewa->Harga; ?></td>
                    <!-- Add more columns as needed -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
