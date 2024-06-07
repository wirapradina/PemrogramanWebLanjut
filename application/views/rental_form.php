<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sewa</title>
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
            max-width: 600px; /* Sesuaikan max-width sesuai keinginan Anda */
            margin: auto;
        }

        h1,
        label,
        p,
        .btn {
            color: #fff;
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
        <h1>Form Sewa</h1>
        <form action="<?php echo base_url('index.php/sewa/process_rental'); ?>" method="post">
            <div class="mb-3">
                <label for="plat_motor" class="form-label">Plat Motor:</label>
                <input type="text" class="form-control" id="plat_motor" name="plat_motor" value="<?php echo urldecode($plat_motor); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="merk_tipe" class="form-label">Merk & Tipe Motor:</label>
                <input type="text" class="form-control" id="merk_tipe" name="merk_tipe" value="<?php echo urldecode($merk_tipe); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="harga_sewa" class="form-label">Harga Sewa:</label>
                <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" value="<?php echo urldecode($harga_sewa); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK:</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No. Telp:</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
            </div>
            <div class="mb-3">
                <label for="lama_sewa" class="form-label">Lama Sewa:</label>
                <input type="text" class="form-control" id="lama_sewa" name="lama_sewa" required>
            </div>
            <button type="submit" class="btn btn-col">Kirim Sewa</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
