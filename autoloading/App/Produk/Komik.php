<?php 

	class Komik extends Produk implements InfoProduk { // kelas child // perluasan fungsionalitas ada di kelas2 ada di kelas child yaitu jumlah halaman dan waktu main 
		public $jmlHalaman;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

			parent::__construct( $judul, $penulis, $penerbit, $harga );
			$this->jmlHalaman = $jmlHalaman;
		}

		public function getInfo() {
			$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

			return $str;
		}

		public function getInfoProduk() {
			$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
			return $str;
		}
	}

 ?>