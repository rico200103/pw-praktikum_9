<?php
require 'functions.php';

//memeriksa apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {

    //jika sudah ditekan dijalankan function tambah
    if (tambah($_POST) > 0) {
        echo "data berhasil ditambahkan";
    } else {
        echo "data gagal ditambahkan";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA KARYAWAN</title>
    <style>
        select {
            border-radius: 6px;
            text-align: center;
        }

        .submit_button {
            padding: 10px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .lihat {
            padding: 20px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .body {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div>

        <div>
            <h1>Tambah Data Karyawan</h1>
        </div>

    </div>

    <div class="body">
        <form action="" method="post">
            <div>
                <label for="name">Name</label>
                <div>
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <div>
                <label for="email">Email</label>
                <div>
                    <input type="email" id="email" name="email">
                </div>
            </div>
            <div>
                <label for="address">Address</label>
                <div>
                    <input type="text" id="address">
                </div>
            </div>
            <div>
                <label for="gender">Gender</label>
                <div>

                    <select name="gender" id="gender">
                        <option selected value="">Gender</option>
                        <option value="laki-laki">Pria</option>
                        <option value="perempuan">Wanita</option>
                    </select>

                </div>
            </div>
            <div>
                <label for="position">Position</label>
                <div>
                    <input type="text" id="position" name="position">
                </div>
            </div>
            <div>
                <label for="status">Status</label>
                <div>
                    <select name="status" id="status">
                        <option selected value="">Status</option>
                        <option value="Fulltime">Fulltime</option>
                        <option value="Parttime">Parttime</option>
                    </select>

                </div>
            </div>
            <br>
            <div>
                <button class="submit_button" type="submit" name="submit">Submit</button>
                <br>
                <br>
                <button class="lihat">
                    <li><a href="index.php">Lihat Data</a></li>
                </button>
            </div>
        </form>
    </div>
</body>

</html>