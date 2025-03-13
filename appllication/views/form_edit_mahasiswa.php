<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(246, 247, 248);
            margin: 20px;
        }

        h1 {
            text-align: center;
            color:rgb(141, 245, 245);
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

        input[type="text"], input[type="hidden"] {
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
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .edit-btn {
            background-color:rgb(146, 246, 248);
            color: white;
            margin-bottom: 10px;
        }

        .edit-btn:hover {
            background-color: #e07b00;
        }

        .delete-btn {
            background-color: #ff4d4d;
            color: white;
        }

        .delete-btn:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>

<h1>Form Data Mahasiswa</h1>

<!-- Form Edit -->
<form action="<?= base_url('edit_mahasiswa') ?>" method="POST">
    <input type="hidden" name="id" value="<?= $mahasiswa->id ?>">
    <input type="text" name="nama" value="<?= $mahasiswa->nama ?>" placeholder="Name" required>
    <input type="text" name="nim" value="<?= $mahasiswa->nim ?>" placeholder="Nim" required>
    <input type="text" name="prodi" value="<?= $mahasiswa->prodi ?>" placeholder="Prodi" required>
    <input type="text" name="kelas" value="<?= $mahasiswa->kelas ?>" placeholder="kelas" required>
    <button type="submit" class="edit-btn">Edit</button>
</form>
</div>

<!-- Tombol Simpan dan Kembali -->
<div class="button-group">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('view-mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
</div>

</form>
</div>

</body>
</html>
