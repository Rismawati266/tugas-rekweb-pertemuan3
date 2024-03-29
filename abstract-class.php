<?php 

	abstract class Produk {
		private $judul, //property dari kelas
				$penulis,
				$penerbit,
				$harga,
				$diskon = 0; // persentasi dari sebuah produk

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) { // variabel lokal
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function setJudul( $judul ) {
			$this->judul = $judul;
		}

		public function getJudul() {
			return $this->judul;
		}

		public function setPenulis ( $penulis ) {
			$this->penulis = $penulis;
		}

		public function getPenulis() {
			return $this->penulis;
		}

		public function setPenerbit ( $penerbit ) {
			$this->penerbit = $penerbit;
		}

		public function getPenerbit() {
			return $this->penerbit;
		}

		public function setDiskon( $diskon ) {
			$this->diskon = $diskon;
		}

		public function getDiskon() {
			return $this->diskon;
		}

		public function setHarga( $harga ) {
			$this->harga = $harga; // harga setelah diskon 
		}

		public function getHarga() {
			return $this->harga - ( $this->harga * $this->diskon / 100 ); // bisa diakses di kelas produk beserta kelas turunanya. Harga setelah diberi diskon
		}

		public function getLabel() {
			return "$this->penulis, $this->penerbit"; // method
		}

		abstract public function getInfoProduk(); // informasi lengakp dari sebuah produk
		public function getInfo() {
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
			$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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
			$str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
			return $str;
		}
	}

	class CetakInfoProduk {
		public $daftarPrduk = array();

		public function tambahProduk( Produk $produk ){
			$this->daftarPrduk[] = $produk;
		}

		public function cetak(){ // method cetak
			$str = "DAFTAR PRODUK : <br>";

			foreach( $this->daftarPrduk as $p ) { // dari daftarProduk kita ambil objek peoduk satu persatu
				$str .= "- {$p->getInfoProduk()} <br>"; // kita akan bangun stringnya. nampilin info secara detail
			}

			return $str;
		}
	}

	$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
	$produk2 = new Game("Uncharted", "Nail Druckmann", "Sony Computer", 250000, 50);

	$cetakProduk = new cetakInfoProduk();
	$cetakProduk->tambahProduk( $produk1 );
	$cetakProduk->tambahProduk( $produk2 );
	echo $cetakProduk->cetak(); // menampilkan dua produk sekaligus

 ?>