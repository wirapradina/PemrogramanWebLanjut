<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rental</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F3F0CA;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Mengatur tata letak ke kiri atas */
        }

        .container {
            max-width: 1300px; /* Sesuaikan dengan lebar yang diinginkan */
            width: 100%;
            margin: 0 auto;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #557C55;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        a:hover{
            background: #A6CF98;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            border: 1px solid #3498db;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #304D30;
            color: #fff;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Rental</h1>
        <a href="<?php echo base_url('index.php/dashboard'); ?>">Kembali ke Dashboard</a>
        <table>
            <thead>
                <tr>
                    <th>ID Sewa</th>
                    <th>Plat Motor</th>
                    <th>Merk Tipe Motor</th>
                    <th>Harga Sewa</th>
                    <th>NIK Penyewa</th>
                    <th>Nama Penyewa</th>
                    <th>No. Telp</th>
                    <th>Lama Sewa (Hari)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rental_data as $rental): ?>
                    <tr>
                        <td><?php echo $rental->id_rental; ?></td>
                        <td><?php echo $rental->plat_motor; ?></td>
                        <td><?php echo $rental->merk_tipe_motor; ?></td>
                        <td><?php echo $rental->harga_sewa; ?></td>
                        <td><?php echo $rental->nik_penyewa; ?></td>
                        <td><?php echo $rental->nama_penyewa; ?></td>
                        <td><?php echo $rental->no_telp; ?></td>
                        <td><?php echo $rental->lama_sewa_hari; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
