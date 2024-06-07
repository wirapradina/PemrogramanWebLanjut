<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #31304D;
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
            color: #000;
            margin-bottom: 20px; /* Menambah margin bawah pada h3 */
        }

        form {
            width: 300px;
            background: #B6BBC4;
            padding: 20px;
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
            width: 100%;
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
            width: 70px;
        }

        input[type="submit"]:hover {
            background-color: #FEFAE0;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="http://localhost/project_uas/index.php/login/login_admin" method="post" onsubmit="return validateForm()">
        <h3>Login Admin</h3>    
        <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Login"></td>
                </tr>
            </table>
        </form>
    </div>
    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "" || password === "") {
                alert("Username dan Password harus diisi");
                return false; // prevent form submission
            }

            return true; // allow form submission
        }
    </script>
</body>
</html>
