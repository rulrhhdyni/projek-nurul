<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA KELAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(137, 214, 214);
            padding: 100px;
        }
        h1 {
            text-align: center;
            color: black;
            border: 5px solid black;
            border-radius: 10px;
            padding: 10px;
            background-color:rgb(9, 111, 101);
        }
        .table-container {
            margin-top: 20px;
            border-radius: 50px;
            overflow: hidden;
            background-color: white;
            box-shadow: 0 0 10px rgba(48, 14, 58, 0.1);
        }
        th {
            background-color:rgb(115, 248, 234);
            color:rgb(67, 8, 84);
            text-align: center;
        }
        td {
            text-align: center;
        }
        .btn {
            margin: 5px;
        }
    </style>
</head>
<body>

<h1>DATA KELAS</h1>

<div class="table-container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA KELAS</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1; // Inisialisasi nomor urut
            foreach ($kelas as $row) { ?>
                <tr>
                    <td><?php echo $i++; ?></td> <!-- Menampilkan nomor urut -->
                    <td><?php echo htmlspecialchars($row->nama); ?></td>
                    
                    <td>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url("form_edit_kelas/".$row->id); ?>">Edit</a>
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url("hapus_kelas/".$row->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
        <div class="d-flex justify-content-end mt-3">
    <a href="<?= base_url('form-kelas'); ?>" class="btn btn-success btn-sm shadow-sm px-3 py-2" 
       style="font-size: 14px; border-radius: 6px;">
        <i class="fas fa-plus"></i> Tambah Kelas
    </a>
    </div>
    </div>

    <p class="footer-text">Data terakhir diperbarui: <?php echo date('d M Y'); ?></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>