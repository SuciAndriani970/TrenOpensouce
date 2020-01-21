<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Kendaraan Hilang</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_kejadian WHERE id_kejadian ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel-->
                    <table class="table table-bordered table-striped table-hover"> 
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=hilang&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Kendaraan Hilang </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

