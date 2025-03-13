<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(142, 234, 238);
            margin: 20px;
        }

        h1 {
            text-align: center;
            color:rgb(17, 134, 138);
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color:rgb(149, 0, 255);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color:rgb(92, 34, 97);
        }
    </style>
</head>
<body>

<h1>Form Data kelas</h1>

<form action="<?= base_url('insert_kelas') ?>" method="POST">
    <input type="hidden" name="id" placeholder="ID" required>
    <input type="text" name="nama" placeholder="NAMA" required>
    <input type="text" name="prodi" placeholder="prodi" required>
    <input type="text" name="dosen" placeholder="dosen" required>

    <button type="submit">Simpan</button>
</form>

</body>
</html>