<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Sewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            background-color: #F3F0CA;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #304D30;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 600px; /* Tambahkan max-width sesuai keinginan Anda */
            margin: auto;
        }

        h1,
        label,
        p,
        .btn {
            color: #fff;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 2em;
        }

        .form-control {
            background-color: #fff;
            color: #222d32;
        }

        .btn-col {
            background-color: #557C55;
            color: #fff;
        }

        .btn-col:hover {
            background-color: #A6CF98;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #5b6468;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Data Sewa</h1>
        <form action="<?php echo base_url('index.php/sewa/process_sewa'); ?>" method="post">
            <div class="mb-3">
                <label for="nik" class="form-label">NIK Penyewa:</label>
                <input type="text" class="form-control" name="nik" required>
            </div>
            <div class="mb-3">
                <label for="nama_penyewa" class="form-label">Nama Penyewa:</label>
                <input type="text" class="form-control" name="nama_penyewa" required>
            </div>
            <div class="mb-3">
                <label for="plat_motor" class="form-label">Plat Motor:</label>
                <input type="text" class="form-control" name="plat_motor" required>
            </div>
            <div class="mb-3">
                <label for="merk_tipe_motor" class="form-label">Merk Tipe Motor:</label>
                <input type="text" class="form-control" name="merk_tipe_motor" required>
            </div>
            <div class="mb-3">
                <label for="lama_sewa_hari" class="form-label">Lama Sewa (hari):</label>
                <input type="number" class="form-control" name="lama_sewa_hari" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="text" class="form-control" name="harga" required>
            </div>
            <button type="submit" class="btn btn-col">Sewa</button>
        </form>

        <!-- Tampilkan tabel di bawah formulir -->
        <!-- Copy dan paste kode tabel yang ada pada file dashboard.php -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
