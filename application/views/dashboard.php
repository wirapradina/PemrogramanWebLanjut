<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #f0f0;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin:auto;
            box-sizing: border-box;
            display: grid;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .motor-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .motor-item {
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        .box {
            width: 280px;
            margin: auto;
            height: 200px;
            background: #f0f0;
            padding: 10px;
        }

        .rent-btn {
            background-color: #557C55;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
            width: 100px;
        }

        .rent-btn:hover {
            background-color: #A6CF98;
        }
        .rent-btn1 {
            background-color: #86A789;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
            margin-right: auto; /* Mengatur margin kanan otomatis untuk menjaga di ujung kanan */
            width: 100px;
        }
        .rent-btn1:hover{
            background-color: #739072;
        }

        .box img {
            width: 130px;
            height: 130px;
            border-radius: 5px;
            object-fit: cover;
        }

        .back-btn {
            background-color: #86A789;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
            margin-left: 1100px; /* Added margin to separate buttons */
            width: 100px;
        }

        .back-btn:hover {
            background-color: #739072;
        }
    </style>
</head>
<body>
    
<div class="container">
    <!-- Notifikasi -->
<?php if ($this->session->flashdata('notification')): ?>
        <div id="notification-bar" style="background-color: #4caf50; color: #fff; padding: 10px; text-align: center;">
            <?php echo $this->session->flashdata('notification'); ?>
            <button onclick="closeNotification()">OK</button>
        </div>
        <script>
            function closeNotification() {
                document.getElementById('notification-bar').style.display = 'none';
            }
        </script>
    <?php endif; ?>

    <a href="<?php echo base_url('index.php/welcome/index'); ?>" class="back-btn">Sign Out</a>
        <h1>Dashboard - Daftar Motor</h1>
    <a href="<?php echo base_url('index.php/datarental/index'); ?>" class="rent-btn1">Data Rental</a> 
        <ul class="motor-list">
            <?php foreach ($motor_data as $motor): ?>
                <li class="motor-item">
                    <strong><?php echo $motor->Merk_Tipe; ?></strong>
                    - <?php echo $motor->PlatMotor; ?> - <?php echo $motor->Status; ?>
                    <div class="box">
                        <img src="<?php echo base_url('assets/') . $motor->Gambar; ?>" alt="<?php echo $motor->Gambar; ?>" width="150">
                        <div class="content">
                            <br>
                            <span><?php echo $motor->HargaSewa; ?></span>
                                <a href="<?php echo base_url('index.php/sewa/rental_form/' . rawurlencode($motor->PlatMotor) . '/' . rawurlencode($motor->Merk_Tipe) . '/' . $motor->HargaSewa); ?>" class="rent-btn">Rental</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
