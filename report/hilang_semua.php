<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Kendaraan Hilang</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel-->
                    <div class="text-center">
                        <h2>Sistem Informasi Kendaraan Hilang POLRES Kisaran Kab. Asahan </h2>
                        <h4>Jl. Ahmad Yani No.110, Kisaran Naga, Kec. Kisaran Tim., Kabupaten Asahan, Sumatera Utara 21211</h4>
                        <hr>
                        <h3>DATA SELURUH KENDARAAN HILANG</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%">ID Kejadian</th><th>Nama pelapor</th><th width="10%">Tanggal Lapor</th><th width="15%"><center>Jenis Kasus</center></th><th><center>Nomor Polisi</center></th>
                                    <th><center>Tahun Kendaraan</center></th><th><center>Merk/Jenis Kendaraan</center></th><th width="10%">Tanggal Kejadian</th><th><center>Tempat Kejadian</center></th><th><center>Dugaan</center></th><th><center>Kronologi</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_kejadian";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['id_kejadian'] ?></td>
                                    <td><?= $data['pelapor_kejadian'] ?></td>
                                    <td><?= $data['tanggal_lapor'] ?></td>
                                    <td><?= $data['jenis_kasus'] ?></td>
                                    <td><?= $data['nopol'] ?></td>
                                    <td><?= $data['thn_kendaraan'] ?></td>
                                    <td><?= $data['merk_jenis'] ?></td>
                                    <td><?= $data['tgl_kejadian'] ?></td>
                                    <td><?= $data['tempat_kejadian'] ?></td>
                                    <td><?= $data['dugaan'] ?></td>
                                    <td><?= $data['kronologi'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
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