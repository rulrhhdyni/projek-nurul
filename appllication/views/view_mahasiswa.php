<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(133, 247, 235);
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: rgb(255, 255, 255);
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(34, 99, 197, 0.1);
            padding: 20px;
        }
        h1 {
            color: rgb(104, 248, 246);
            margin-bottom: 20px;
            text-align: center;
            font-size: 2.5em;
        }
        table {
            margin: 0 auto;
            width: 100%;
        }
        th {
            background-color: rgb(126, 237, 249);
            color: white;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #e9ecef;
        }
        tr:nth-child(odd) {
            background-color: #ffe4e1;
        }
        tr:hover {
            background-color: #ffeb3b;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #6c757d;
        }
        .btn-edit {
            background-color:rgb(25, 218, 232); /* Blue */
            color: white;
            margin-left: 10px;
        }
        .btn-edit:hover {
            background-color:rgb(155, 253, 243); /* Darker blue */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Data Mahasiswa</h1>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>kelas</th> <!-- Column for actions -->
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($mahasiswa as $row) {
                echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row->nama."</td>
                    <td>".$row->nim."</td>
                    <td>".$row->prodi."</td>
                    <td>".$row->kelas."</td>
                    <td>
                        <a class='btn btn-sm btn-edit' href='".base_url("form_edit_mahasiswa/".$row->id)."'>Edit</a>
                        <a class='btn btn-sm btn-primary' href='".base_url("hapus_mahasiswa/".$row->id)."'>delete</a>
                    </td>
                </tr>";
            } ?>
        </tbody>
    </table>
    </div>
    </div>
    <div class="footer">
<a href="<?= base_url('form-mahasiswa'); ?>" class="btn btn-success btn-sm shadow-sm px-3 py-2" 
       style="font-size: 14px; border-radius: 6px;">
        <i class="fas fa-plus"></i> Tambah Kelas
    </a>
    </div>
    </div>
    </div>
    <div class="text-center text-muted small mt-3">
        <p>Data terakhir diperbarui: <?= date('d M Y'); ?></p>
    </div>
</div>
    <p>&copy; 2023 Data Mahasiswa. All Rights Reserved.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>