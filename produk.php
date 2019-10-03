<?php 

	class Produk {
		public 	$judul = "judul",
				$penulis = "penulis",
				$penerbit = "penerbit",
				$harga = 0;
	}

	$produk1 = new Produk();
	$produk1->judul = "Naruto"; // ditimpa
	var_dump($produk1);

	$produk2 = new Produk();
	$produk2->judul = "Ucharted"; // ditimpa
	$produk2->tambahProperty = "hahaha";
	var_dump($produk2);

 ?>