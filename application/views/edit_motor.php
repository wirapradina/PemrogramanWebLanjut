<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Motor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 56px;
            background-color: #B0D9B1;
        }
        .bg {
            background-color: #618264;
        }
        .btn-col {
            background-color: #79AC78;
            color: #fff
        }
        .btn-col:hover {
            background-color: #618264;
            color: #fff
        }
        table {
            width: 100%;
        }
        th, td {
            text-align: center;
            vertical-align: middle;
        }
        th {
            font-size: 1.5em;
        }
        td {
            font-size: 1.2em;
        }
        .navbar-brand {
            font-size: 2em;
            font-weight: bold;
        }
        tbody {
            border-top: 2px solid #fff;
        }
        .btn-back {
            margin-top: 20px;
        }
        .img-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .img-preview {
            max-width: 200px;
            max-height: 200px;
            width: auto;
            height: auto;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg fixed-top">
        <div class="container">
            <a class="navbar-brand">Rental Motor</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Edit Motor</h1>

        <?php if (isset($motor)) : ?>
            <form action="<?php echo base_url('index.php/data_motor/update_motor'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="PlatMotor" value="<?php echo $motor->PlatMotor; ?>">

                <div class="img-container">
                    <img src="<?php echo base_url('assets/') . $motor->Gambar; ?>" alt="<?php echo $motor->Gambar; ?>" alt="Motor Image" class="img-preview">
                    <div>
                        <label for="Gambar" class="form-label">Gambar Motor</label>
                        <input type="file" class="form-control" id="Gambar" name="Gambar">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="PlatMotor" class="form-label">Plat Motor</label>
                    <input type="text" class="form-control" id="PlatMotor" name="PlatMotor" value="<?php echo $motor->PlatMotor; ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="Merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="Merk" name="Merk" value="<?php echo $motor->Merk_Tipe; ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="HargaSewa" class="form-label">Harga Sewa</label>
                    <input type="text" class="form-control" id="HargaSewa" name="HargaSewa" value="<?php echo $motor->HargaSewa; ?>">
                </div>

                <div class="mb-3">
                    <label for="Status" class="form-label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Status" id="StatusTersedia" value="Tersedia" <?php echo ($motor->Status == 'Tersedia') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="StatusTersedia">
                            Tersedia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Status" id="StatusDisewa" value="Disewa" <?php echo ($motor->Status == 'Disewa') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="StatusDisewa">
                            Disewa
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-col">Simpan Perubahan</button>
            </form>
            <br>
            <a href="<?php echo base_url('index.php/data_motor'); ?>" class="btn btn-col">Kembali ke List Motor</a>
        <?php else : ?>
            <p>Data motor tidak ditemukan.</p>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
