<?php 
	
	require_once 'App/init.php';

	// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
	// $produk2 = new Game("Uncharted", "Nail Druckmann", "Sony Computer", 250000, 50);

	// $cetakProduk = new cetakInfoProduk();
	// $cetakProduk->tambahProduk( $produk1 );
	// $cetakProduk->tambahProduk( $produk2 );
	// echo $cetakProduk->cetak(); // menampilkan dua produk sekaligus


	use App\Service\User as ServiceUser;
	use App\Produk\User as ProdukUser;
	// new App\Produk\User(); // muncul isi dari function construct
	//echo "<br>";
	//new App\Service\User();

	new ServiceUser();
	echo "<br>";
	new ProdukUser();

 ?>