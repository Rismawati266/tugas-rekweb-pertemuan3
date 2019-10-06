<?php 

	require_once 'App/Produk/InfoProduk.php';
	require_once 'App/Produk/Produk.php';
	require_once 'App/Produk/Komik.php'; // untuk satu kelas komik
	require_once 'App/Produk/Game.php';
	require_once 'App/Produk/CetakInfoProduk.php';

	
	$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
	$produk2 = new Game("Uncharted", "Nail Druckmann", "Sony Computer", 250000, 50);

	$cetakProduk = new cetakInfoProduk();
	$cetakProduk->tambahProduk( $produk1 );
	$cetakProduk->tambahProduk( $produk2 );
	echo $cetakProduk->cetak(); // menampilkan dua produk sekaligus

 ?>