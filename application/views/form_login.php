<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #B6BBC4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h3 {
            color: #333;
            margin-bottom: 20px; /* Menambah margin bawah pada h3 */
        }

        form {
            width: 300px;
            background: #7C93C3;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
            font-weight: bold; /* Menjadikan teks bold */
            font-family: sans-serif; /* Ganti 'Nama-Font-Anda' dengan nama font yang diinginkan */
        }

        input {
            width: 120%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        input[type="submit"] {
            background-color: #B6BBC4;
            color: #000;
            cursor: pointer;
            border-radius: 10px;
            width: 65%;
        }

        input[type="submit"]:hover {
            background-color: #FEFAE0;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="http://localhost/project_uas/index.php/login/aksi_login" method="post">
            <h3>LOGIN</h3>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Login"></td>
                </tr>
            </table>
            <div class="register-link">
            <p>Belum Punya Akun? <a href="<?= site_url('index.php/login/register'); ?>">Daftar Disini</a></p>
        </div>
        </form>
    </div>

</body>
</html>
