<?php 

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

 ?>