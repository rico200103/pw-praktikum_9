<?php

//memanggil file function.php
require 'functions.php';

//memanggil function query pengambilan data pada table mahasiswa
//lalu data ditampung kedalam variable mahasiswa
$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA KARYAWAN</title>
    <style>
        h1 {
            text-align: center;
        }

        td,th {
            border: 1px solid white;
            text-align: center;
            padding: 8px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .tambah_button {
            padding: 5px;
            background-color: palegreen;
            color: black;
            text-decoration: none;
            border-radius: 6px;

        }

        .hapus_button{
            padding: 5px;
            background-color: purple;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <div>
        <h1>DAFTAR KARYAWAN</h1>

        <a class="tambah_button" href="tambah.php">Tambah Data</a>
        <br>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Position</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>

            <?php foreach ($karyawan as $item) : ?>
                <tr>
                    <td><?= $item["id"] ?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['address']; ?></td>
                    <td><?= $item['gender']; ?></td>
                    <td><?= $item['position']; ?></td>
                    <td><?= $item['status']; ?></td>
                    <td>
                        <a href="hapus.php?id=<?= $item['id']; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?');">
                            <button type="button" class="hapus_button">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>