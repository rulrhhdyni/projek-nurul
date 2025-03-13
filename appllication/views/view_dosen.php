<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA DOSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(157, 252, 252);
            padding: 100px;
        }
        h1 {
            text-align: center;
            color: black;
            border: 5px solid black;
            border-radius: 10px;
            padding: 10px;
            background-color:rgb(11, 182, 182);
        }
        .table-container {
            margin-top: 10px;
            border-radius: 50px;
            overflow: hidden;
            background-color: white;
            box-shadow: 0 0 10px rgba(224, 230, 231, 0.1);
        }
        th {
            background-color:rgb(168, 250, 251);
            color:rgb(132, 248, 240);
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

<h1>DATA DOSEN</h1>

<div class="table-container">
    <table class="table table-dark table-bordered table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NRP</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1; // Inisialisasi nomor urut
            foreach ($dosen as $row) { ?>
                <tr class="table-info">
                    <td><?php echo $i++; ?></td> <!-- Menampilkan nomor urut -->
                    <td><?php echo htmlspecialchars($row->nama); ?></td>
                    <td><?php echo htmlspecialchars($row->nrp); ?></td>
                    
                    <td>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url("form_edit_dosen/".$row->id); ?>">Edit</a>
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url("hapus_dosen/".$row->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    </div>
    <div class="d-flex justify-content-end mt-3">
    <a href="<?= base_url('form-dosen'); ?>" class="btn btn-success btn-sm shadow-sm px-3 py-2" 
       style="font-size: 14px; border-radius: 6px;">
        <i class="fas fa-plus"></i> Tambah Kelas
    </a>
    </div>
    </div>
    </div>

    <div class="text-center text-muted small mt-3">
        <p>Data terakhir diperbarui: <?php echo date('d M Y'); ?></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>