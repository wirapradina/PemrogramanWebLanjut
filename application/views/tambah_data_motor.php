<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Motor</title>
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
        <h1>Tambah Data Motor</h1>
        <form action="<?php echo base_url('index.php/data_motor/proses_tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="PlatMotor" class="form-label">Plat Motor:</label>
                <input type="text" class="form-control" id="PlatMotor" name="PlatMotor" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar:</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="Merk_Tipe" class="form-label">Merk Tipe Motor:</label>
                <input type="text" class="form-control" id="Merk_Tipe" name="Merk_Tipe" required>
            </div>
            <div class="mb-3">
                <label for="HargaSewa" class="form-label">Harga Sewa:</label>
                <input type="text" class="form-control" id="HargaSewa" name="HargaSewa" required>
            </div>
            <div class="mb-3">
                <label for="Status" class="form-label">Status:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Status" id="tersedia" value="Tersedia" checked>
                    <label class="form-check-label" for="tersedia">Tersedia</label>
                </div>
                <br>
                    <button type="submit" class="btn btn-col" name="simpan">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
<br>
