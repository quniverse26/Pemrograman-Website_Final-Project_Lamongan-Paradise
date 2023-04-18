<!DOCTYPE html>

<html lang="en">

<head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/css/shop-homepage.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<title>Cetak Tiket</title>

<body onload="window.print()">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row-table-bordered">
                
                <br>
                <br>
                <br>
                <div class="col-md-4">
                    <font size="4"><b><p class="text-center">LAPORAN PENJUALAN</p></font>
                    <font size="3"><b><p class="text-center">YOBUS</p></font>

                    <h4><center>Laporan Penjualan</h4>
<table border="1" cellpadding="10" cellspacing="0">
        
        <tr>
            <th> No. </th>
            <th> Gambar </th>
            <th> Nama Oleh-Oleh </th>
            <th> Alamat </th>
            <th> Harga </th>
            <th> Deskripsi </th>
        </tr>

        <?php $i = 1; ?>
        <?php
            while ($row = mysqli_fetch_assoc($tampil1)) :
        ?>

        <tr>
            <td> <?php echo $i; ?> </td>
            <td>
                <img src="image/<?= $row["gambar"]; ?>" width="100">
                </td>
            <td> <?php echo $row["nama_oleh"]; ?> </td>
            <td> <?php echo $row["alamat"]; ?>. </td>
            <td> <?php echo $row["harga"]; ?>. </td>
            <td> <?php echo $row["deskripsi"]; ?>. </td>
        </tr>

        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
                </div>
                <style type="text/css">
                  hr.style2 {
                    border-top: 3px double #8c8b8b;
                    }
                </style>
            </div>
        </div>
        <hr class="style2">

        <?php
            
            include 'koneksi.php';

            $result = mysqli_query($conn, "SELECT * FROM tb_oleh");
            
            error_reporting(0);

            $tampil1 = mysqli_query($conn, $result)or die(mysqli_error($conn));

            $no =1;

        ?>

<body>


<br>
<br>




</body>
</html>