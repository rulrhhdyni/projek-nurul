<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color:rgb(159, 240, 246); /* Light blue background */
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h1 {
            color:rgb(136, 242, 248); /* Blue color */
            margin-bottom: 30px;
            text-align: center;
            font-size: 2.5em;
        }
        .btn-submit {
            background-color:rgb(150, 226, 249); /* Green */
            color: white;
            width: 100%;
            padding: 10px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
        }
        .btn-submit:hover {
            background-color:rgb(166, 247, 232); /* Darker green */
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-control:focus {
            border-color:rgb(161, 247, 235); /* Blue border on focus */
            box-shadow: 0 0 5px rgba(192, 239, 230, 0.5);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Form Data Mahasiswa</h1>
    <form action="<?= base_url('insert_mahasiswa')?>" method="POST">
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-select" id="prodi" name="prodi" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-select" id="kelas" name="kelas" required>
        <button type="submit" class="btn btn-submit">Simpan</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>