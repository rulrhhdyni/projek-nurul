<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(146, 248, 241);
            padding: 50px;
        }
        .form-container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(84, 47, 118, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        button {
            width: 100%;
            background-color:rgb(25, 100, 101);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
        }
        button:hover {
            background-color:rgb(131, 239, 243);
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Kelas</h2>
    <form action="<?= base_url('edit_kelas') ?>" method="POST">
    <input type="hidden" name="id" value="<?= $kelas->id ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">NAMA KELAS:</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?= $kelas->nama ?>" required>
    </div>
    <button type="submit" class="edit-btn">Edit</button>
</form>
</div>

<!-- Tombol Simpan dan Kembali -->
<div class="button-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('view-kelas') ?>" class="btn btn-secondary">Kembali</a>
        </div>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>