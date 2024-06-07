<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-repeat: no-repeat;
            background-position: center;
            background-size: auto;
        }

        nav {
            position: fixed;
            top : 0;
            background-color: #B6BBC4;
            padding: 10px 0;
            width: 100%;
            text-align: left;
            margin-bottom: auto;
            display: flex;
            justify-content: space-between;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            display: inline-block;
            margin-right: 20px;
        }

        a {
            display: block;
            color: black;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding: 14px 16px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #fff;
            border-radius: 5px;
        }

        ul li a::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: black;
            transition: width 0.3s;
        }

        ul li a:hover::after {
            width: 100%;
        }

        @media screen and (max-width: 600px) {
            ul {
                display: block;
                margin: 0 auto;
            }

            li {
                display: block;
                text-align: center;
                margin-bottom: 10px;
            }
        }

        h1 {
            color: #fff;
            margin-bottom: 20px;
        }

        .login-admin-btn,
        .login-user-btn {
            color: #000;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .login-admin-btn:hover,
        .login-user-btn:hover {
            background-color: #fff;
        }

        .login-admin-btn {
            margin-left: 250px;
        }

        img.logo {
            height: 50px;
            width: 50px;
            margin-right: 5px;
            vertical-align: middle;
        }

        li {
            display: inline-block;
            margin-right: 10px;
            margin-left: 50px;
        }

        #beranda {
            width: 100%;
            min-height: 100vh;
            background: url('/project_uas/assets/bgindex.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(15rem, auto)); /* Slightly smaller size */
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 200px;
        }

        .beranda-text {
            width: 100%;
            height: 100%;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: -200px;
        }

        .rental-text {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #000;
        }

        #tentang-kami {
            text-align: center;
            padding: 40px;
            background-color: #F0F0F0;
            margin-top: auto;
        }

        .about-text {
            margin-top: 20px;
        }

        #footer {
            display: flex;
            background-color: #B6BBC4;
            color: #000;
            padding: 40px 0;
            justify-content: space-between; /* Menggunakan space-between agar elemen di dalam footer tersebar secara merata */
            width: 100%;
        }

        .footer-column {
            flex: 1;
            text-align: center; /* Menggunakan center agar isi dari setiap kolom berada di tengah */
        }


        .footer-column h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .footer-column p {
            margin: 5px 0;
        }

        .footer-column a {
            text-decoration: none;
            color: #fff;
            display: block;
            margin: 5px 0;
        }

        .social-icons {
            display: flex;
            align-items: center;
            margin-left: 230px; /* Tambahkan agar ikon sosial media berada di tengah vertikal */
        }

        .social-icons a {
            font-size: 24px;
            margin: 0 10px; /* Membuat margin kanan dan kiri pada ikon */
            color: #000;
        }


        .copyright {
            background-color: #31304D; /* Ganti dengan warna yang Anda inginkan */
            color: #fff; /* Ganti dengan warna teks yang sesuai */
            text-align: center;
            padding: 15px;
            width: 97.8%;
        }

    </style>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <img class="logo" src="/project_uas/assets/logomotor.png" alt="Logo">
            </li>
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang-kami">Tentang Kami</a></li>
            <li><a href="#footer">Kontak</a></li>
            <li class="btnA"><a href="http://localhost/project_uas/index.php/login/logadmin" class="login-admin-btn">Login Admin</a></li>
            <li class="btn"><a href="http://localhost/project_uas/index.php/login" class="login-user-btn">Login User</a></li>
        </ul>
    </nav>

    <section id="beranda">
        <!-- Menggunakan gambar sebagai latar belakang -->
        <div class="beranda-text">
            <h1 class="rental-text">MOTORMU - SEWA MOTOR</h1>
        </div>
    </section>

    <section id="tentang-kami">
    <div class="about-text">
        <h2>Tentang Kami</h2>
        <p>Selamat datang di Rental Motor, tempat terbaik untuk memenuhi kebutuhan sewa motor Anda. Kami hadir dengan misi menyediakan layanan sewa motor yang mudah, cepat, dan terpercaya.
        Kami menyediakan berbagai jenis motor sesuai dengan kebutuhan Anda, dengan harga yang terjangkau. Keamanan dan kenyamanan pelanggan adalah prioritas utama kami, sehingga setiap motor selalu dalam kondisi terbaik dan siap untuk digunakan.
        Terima kasih atas kepercayaan Anda kepada Rental Motor. Jadikan perjalanan Anda lebih menyenangkan dengan layanan sewa motor terbaik dari kami.</p>
    </div>
</section>

    <section id="footer">
    <div class="footer-column">
        <h2>Kontak Kami</h2>
        <p>Email: qiwqiw@cukurukuk.com</p>
        <p>Telepon: +62 123 456 789</p>
        <p>Alamat: Jl. Tinggal Jalan No 123, GausahNgajak</p>
    </div>

    <div class="footer-column">
        <h2>Ikuti Kami</h2>
        <p>Temukan kami di media sosial:</p>
        <div class="social-icons">
            <a href="#" class='bx bxl-facebook'></i></a>
            <a href="#" class='bx bxl-twitter'></i></a>
            <a href="#" class='bx bxl-instagram'></i></a>
        </div>
    </div>
</section>

<!--Copyright-->
<div class="copyright">
            <p>&#169; ANTA QIRDUN All Right Reserved </p>
        </div>


</body>

</html>
