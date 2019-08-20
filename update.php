<?php
	session_start();
		include 'koneksi.php';
		$nama_produk = $_POST["nama_produk"];
		$model = $_POST["model"];
		$part_no_produk_forging = $_POST["part_no_produk_forging"];
		$customer = $_POST["customer"];
		$status_produk = $_POST["status_produk"];
		$sp_mat_pro = $_POST["sp_mat_pro"];
		$dim_mat_pro = $_POST["dim_mat_pro"];
		$berat_mat = $_POST["berat_mat"];
		$berat_pro = $_POST["berat_pro"];
		$yield_pro = $_POST["yield_pro"];
		$list_type_forging = $_POST["list_type_forging"];
		$type_forging_default = $_POST["line_fg_01"];
		$type_forging_optional_1 = $_POST["line_fg_02"];
		$type_forging_optional_2 = $_POST["line_fg_03"];
		$type_forging_optional_3 = $_POST["line_fg_04"];
		$type_forging_optional_4 = $_POST["line_fg_05"];
		$ct_pro = $_POST["ct_pro"];
		$forecast_pro = $_POST["forecast_pro"];
		$id_produk_forging = $_POST["kode_produk"];


echo $id_produk_forging.'<br>';
echo $nama_produk.'<br>';
echo $model.'<br>';
echo $part_no_produk_forging.'<br>';
echo $customer.'<br>';
echo $status_produk.'<br>';
echo $sp_mat_pro.'<br>';
echo $dim_mat_pro.'<br>';
echo $berat_mat.'<br>';
echo $berat_pro.'<br>';
echo $yield_pro.'<br>';
echo $list_type_forging.'<br>';
echo $type_forging_default.'<br>';
echo $type_forging_optional_1.'<br>';
echo $type_forging_optional_2.'<br>';
echo $type_forging_optional_3.'<br>';
echo $type_forging_optional_4.'<br>';
echo $ct_pro.'<br>';
echo $forecast_pro.'<br>';


// 	// query sql

	$sql = "UPDATE  db_produk_forging 
			SET 	nama_produk				='$nama_produk',
				model 					='$model',
				part_no_produk_forging	='$part_no_produk_forging',
				customer				='$customer',
				status_produk			='$status_produk',
    				sp_mat_pro				='$sp_mat_pro',
    				dim_mat_pro				='$dim_mat_pro',
    				berat_mat				='$berat_mat',
    				berat_pro				='$berat_pro',
    				yield_pro				='$yield_pro',
    				list_type_forging		='$list_type_forging',
    				line_fg_01				='$type_forging_default',
    				line_fg_02				='$type_forging_optional_1',
    				line_fg_03				='$type_forging_optional_2',
    				line_fg_04				='$type_forging_optional_3',
    				line_fg_05				='$type_forging_optional_4',
    				ct_pro 					='$ct_pro',
    				forecast_pro			='$forecast_pro'
			WHERE 	id_produk_forging 			='$id_produk_forging'";
                //Sesuain nama field didatabase = sesuain nama variabel diatas.
                
$query = mysqli_query($koneksi, $sql);

	if($query){
		echo "Data berhasil dirubah!";
	} else {
		echo "Data gagal dirubah!";
	}

?>
