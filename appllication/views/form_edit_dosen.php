<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 50px;
        }
        .form-container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
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
            background-color:rgb(90, 246, 238);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Dosen</h2>
    <form action="<?= base_url('edit_dosen') ?>" method="POST">
    <input type="hidden" name="id" value="<?= $dosen->id ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $dosen->nama ?>" required>
        </div>
        <div class="mb-3">
            <label for="nrp" class="form-label">NRP:</label>
            <input type="text" name="nrp" id="nrp" class="form-control" value="<?= $dosen->nrp ?>" required>
        </div>
        <button type="submit" class="edit-btn">Edit</button>
    </form>
</div>

<!-- Tombol Simpan dan Kembali -->
<div class="button-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('view-dosen') ?>" class="btn btn-secondary">Kembali</a>
        </div>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>