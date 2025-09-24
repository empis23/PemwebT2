<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP Dasar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Daftar Buah-buahan</h2>
    <div class="row">

        <?php
        // Array berisi daftar buah
        $buah = [
            ["nama" => "Mangga", "keterangan" => "Manis, kadang kecut"],
            ["nama" => "Jeruk", "keterangan" => "Kecut"],
            ["nama" => "Apukat", "keterangan" => "Biasa aja"],
            ["nama" => "Pisang", "keterangan" => "Lembut dan manis"]
        ];

        // Looping array
        foreach ($buah as $item) {
            // Pengkondisian khusus untuk Jeruk
            if ($item["nama"] == "Jeruk") {
                $cardClass = "bg-warning text-dark"; // warna kuning
            } else {
                $cardClass = "bg-light"; // default
            }
            ?>

            <div class="col-md-3">
                <div class="card mb-3 <?php echo $cardClass; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item["nama"]; ?></h5>
                        <p class="card-text"><?php echo $item["keterangan"]; ?></p>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
