<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Provinsi & Kota</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
    <!-- isi konten -->
    <div class="container">
        <div id="content" class="p-4">
        <figure class="text-center">
            <h2>Data Provinsi & Kota</h2>
            <br>
            <br>

            <?php
            include "connect.php";

            // jumlah provinsi
            $queryprovinsi = "SELECT COUNT(*) as totalprovinsi FROM provinsi";
            $resultprovinsi = mysqli_query($connect, $queryprovinsi);
            $totalprovinsi = 0;
            if ($resultprovinsi) {
                $dataprovinsi = mysqli_fetch_assoc($resultprovinsi);
                $totalprovinsi = $dataprovinsi['totalprovinsi'];
            }

            // jumlah kota
            $querykota = "SELECT COUNT(*) as totalkota FROM kota";
            $resultkota = mysqli_query($connect, $querykota);
            $totalkota = 0;
            if ($resultkota) {
                $datakota = mysqli_fetch_assoc($resultkota);
                $totalkota = $datakota['totalkota'];
            }
            ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="card" align="center">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Provinsi</h5>
                            <p class="card-text">
                                <?php echo $totalprovinsi; ?>
                            </p>
                            <a href="provinsi/provinsi.php" class="btn btn-success">Tampilkan Jumlah Provinsi</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" align="center">
                        <div class="card-body"> 
                            <h5 class="card-title">Jumlah Kota</h5>
                            <p class="card-text">
                                <?php echo $totalkota; ?>
                            </p>
                            <a href="kota/kota.php" class="btn btn-success">Tampilkan Jumlah Kota</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir isi konten -->

    <script src="asset/js/bootstrap.bundle.min.js"></script>

</body>

</html>