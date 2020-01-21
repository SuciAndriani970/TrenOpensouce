<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Kendaraan Hilang</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_kejadian WHERE id_kejadian='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel-->
                    <div class="text-center">
                        <h2>Sistem Informasi Kendaraan Hilang POLRES Kisaran Kab. Asahan </h2>
                        <h4>Jl. Ahmad Yani No.110, Kisaran Naga, Kec. Kisaran Tim., Kabupaten Asahan, Sumatera Utara 21211</h4>
                        <hr>
                        <h3>DATA KENDARAAN HILANG</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>ID Kejadian</td> <td><?= $data['id_kejadian'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pelapor</td> <td><?= $data['pelapor_kejadian'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lapor kejadian</td> <td><?= $data['tanggal_lapor'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kasus</td> <td><?= $data['jenis_kasus'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor Polisi Kendaraan</td> <td><?= $data['nopol'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tahun Kendaraan</td> <td><?= $data['thn_kendaraan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Merk/Jenis Kendaraan</td> <td><?= $data['merk_jenis'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Kejadian</td> <td><?= $data['tgl_kejadian'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Kejadian</td> <td><?= $data['tempat_kejadian'] ?></td>
                                </tr>
                                <tr>
                                    <td>Dugaan Kejadian</td> <td><?= $data['dugaan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kronologi Kejadian</td> <td><?= $data['kronologi'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>

							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>