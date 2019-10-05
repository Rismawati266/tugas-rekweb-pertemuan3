<?php 

	class Produk {
		public 	$judul, //property dari kelas
				$penulis,
				$penerbit;
		protected $diskon = 0; // persentasi dari sebuah produk
		private $harga;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) { // variabel lokal
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function setDiskon( $diskon ) {// memberikan diskon // setdiskon-> ngasih sebuah diskon sebuah barang panggil setdiskon
			$this->diskon = $diskon;
		}

		public function getHarga() {
			return $this->harga - ( $this->harga * $this->diskon / 100 ); // bisa diakses di kelas produk beserta kelas turunanya. Harga setelah diberi diskon
		}

		public function getLabel() {
			return "$this->penulis, $this->penerbit"; // method
		}

		public function getInfoProduk() { // informasi lengakp dari sebuah produk
			$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

			return $str;
		}
	}

	class Komik extends Produk { // kelas child // perluasan fungsionalitas ada di kelas2 ada di kelas child yaitu jumlah halaman dan waktu main 
		public $jmlHalaman;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

			parent::__construct( $judul, $penulis, $penerbit, $harga );
			$this->jmlHalaman = $jmlHalaman;
		}

		public function getInfoProduk() {
			$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
			return $str;
		}
	}

	class Game extends Produk {
		public $waktuMain;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {

			parent::__construct( $judul, $penulis, $penerbit, $harga );
			$this->waktuMain = $waktuMain;
		}


		public function getInfoProduk() {
			$str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
			return $str;
		}
	}


	class CetakInfoProduk {
		public function cetak( Produk $produk ){ // method cetak
			$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";// mengembalikan nilai sebuah string
			return $str;
		}
	}

	$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
	$produk2 = new Game("Uncharted", "Nail Druckmann", "Sony Computer", 250000, 50);

	echo $produk1->getInfoProduk();
	echo "<br>";
	echo $produk2->getInfoProduk();
	echo "<hr>";

	$produk2->setDiskon(50);
	echo $produk2->getHarga();



 ?>