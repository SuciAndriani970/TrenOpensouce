<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_kejadian WHERE id_kejadian ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Kendaraan Hilang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="id_kejadian" class="col-sm-3 control-label">ID Kejadian</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_kejadian" value="<?=$data['id_kejadian']?>"class="form-control" id="inputEmail3" placeholder="ID Kejadian">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="pelapor_kejadian" class="col-sm-3 control-label">Nama pelapor</label>
                            <div class="col-sm-9">
                                <input type="text" name="pelapor_kejadian" value="<?=$data['pelapor_kejadian']?>"class="form-control" id="inputEmail3" placeholder="Nama Pelapor Kejadian">
                            </div>
                        </div>

                         <!--untuk tanggal kejadian form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Pelaporan</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2025;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal kejadian--> 

						<div class="form-group">
                            <label for="jenis_kasus" class="col-sm-3 control-label">Jenis Kasus</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kasus" value="<?=$data['jenis_kasus']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kasus">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nopol" class="col-sm-3 control-label">Nomor Polisi</label>
                            <div class="col-sm-9">
                                <input type="text" name="nopol" value="<?=$data['nopol']?>"class="form-control" id="inputEmail3" placeholder="Nomor Polisi">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="thn_kendaraan" class="col-sm-3 control-label">Tahun Kendaraan</label>
                            <div class="col-sm-9">
                                <input type="text" name="thn_kendaraan" value="<?=$data['thn_kendaraan']?>"class="form-control" id="inputEmail3" placeholder="Tahun Kendaraan" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="merk_jenis" class="col-sm-3 control-label">Merk/Jenis Kendaraan</label>
                            <div class="col-sm-9">
                                <input type="text" name="merk_jenis" value="<?=$data['merk_jenis']?>"class="form-control" id="inputEmail3" placeholder="Merk/Jenis Kendaraan" >
                            </div>
                        </div

                        <!--untuk tanggal kejadian form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Kejadian</label>
                            <!--untuk tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2025;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           

                        <div class="form-group">
                            <label for="tempat_kejadian" class="col-sm-3 control-label">Tempat kejadian</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_kejadian" value="<?=$data['tempat_kejadian']?>" class="form-control" id="inputPassword3" placeholder="Tempat kejadian">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dugaan" class="col-sm-3 control-label">Dugaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="dugaan" value="<?=$data['dugaan']?>" class="form-control" id="inputPassword3" placeholder="Dugaan">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="kronologi" class="col-sm-3 control-label">Kronologi</label>
                            <div class="col-sm-9">
                                <input type="text" name="kronologi" value="<?=$data['kronologi']?>" class="form-control" id="inputPassword3" placeholder="Kronologi">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Kendaraan Hilang</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=hilang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $id_kejadian            =$_POST['id_kejadian'];
    $pelapor_kejadian       =$_POST['pelapor_kejadian'];
	$tanggal_lapor          =$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $jenis_kasus            =$_POST['jenis_kasus'];
	$nopol                  =$_POST['nopol'];
    $thn_kendaraan          =$_POST['thn_kendaraan'];
    $merk_jenis             =$_POST['merk_jenis'];
    $tgl_kejadian           =$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $tempat_kejadian        =$_POST['tempat_kejadian'];
	$dugaan                 =$_POST['dugaan'];
    $kronologi              =$_POST['kronologi'];
    //buat sql
    $sql="UPDATE tbl_kejadian SET id_kejadian='$id_kejadian',pelapor_kejadian='$pelapor_kejadian',tanggal_lapor='$tanggal_lapor',jenis_kasus='$jenis_kasus',nopol='$nopol',
	thn_kendaraan='$thn_kendaraan',merk_jenis='$merk_jenis',tgl_kejadian='$tgl_kejadian',tempat_kejadian='$tempat_kejadian',dugaan='$dugaan',kronologi='$kronologi' WHERE id_kejadian ='$id_kejadian'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=hilang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



