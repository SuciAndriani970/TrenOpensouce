<div class="">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Kendraan Hilang</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>ID Kejadian</th><th>Nama Pelapor</th><th>Tanggal Lapor</th><th>Jenis Kasus</th><th>NoPol Kendaraan</th><th>Tahun Kendaraan</th>
                                <th>Merk/Jenis Kendaraan</th><th>Tanggal Kejadian</th><th>Tempat Kejadian</th><th>Dugaan</th><th>Kronologi</th><th>ACTIONS</th>
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
                                    <td>
                                        <a href="report/hilang_satu.php?id=<?= $data['id_kejadian'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/hilang_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Kendaraan Hilang

                                    </a>
                                    <a href="report/hilang_perbulan" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Perbulan

                                    </a>
                                    <a href="report/hilang_pertahun" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Pertahun

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="cetak_perbulan" class="modalDialog">
    <div>
        <a href="report/hilang_perbulan" title="Close" class="close">X</a>

        <form  target="report/hilang_perbulan" action="report/hilang_perbulan.php" method="post">
        <h4>Pilih bulan </h4>
        <select name="bulan" class="form-control">
          <option value="12"> Desember </option>
          <option value="11"> November </option>
          <option value="10"> Oktober </option>
          <option value="09"> September </option>
          <option value="08"> Agustus </option>
          <option value="07"> Juli </option>
          <option value="06"> Juni </option>
          <option value="05"> Mei </option>
          <option value="04"> April </option>
          <option value="03"> Maret </option>
          <option value="02"> Februari </option>
          <option value="01"> Januari </option>
        </select>
        <h4>Pilih tahun</h4>
        <select name="tahun" class="form-control">
          <?
            for ($i=substr(date("d-m-Y"),6,4); $i > substr(date("d-m-Y"),6,4)-5; $i--) { ?>
              <option value="<?tahun=$i?>"> <?tahun=$i?> </option>
          <?  }
          ?>
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>

<div id="cetak_pertahun" class="modalDialog">
    <div>
        <a href="report/hilang_pertahun" title="Close" class="close">X</a>

        <form  target="_blank" action="report/hilang_pertahun.php" method="post">
        <h4>Pilih tahun</h4>
        <select name="tahun" class="form-control">
          <?
            for ($i=substr(date("d-m-Y"),6,4); $i > substr(date("d-m-Y"),6,4)-5; $i--) { ?>
              <option value="<?tahun=$i?>"> <?tahun=$i?> </option>
          <?  }
          ?>
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>
