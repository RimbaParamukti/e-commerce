<?php 
/**
 * 
 */
class Home_model
{
	// PDO database. DBH(database Handler)
	private $db;

	public function __construct()
	{
		$this->db = new database; 
	}

	// Detail Produk
	public function getAllGaleri($id_produk)
	{
		$query = "SELECT * FROM galeri_produk
					WHERE 
						galeri_produk.id_produk = '$id_produk'";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function getDetailProduk($id)
	{
		$this->db->query('SELECT * FROM produk WHERE id_produk= :id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	// Index & Shop 
	public function getFoto()
	{
		$query = $this->getProduk();
		foreach ($query as $produk) {
			$idProduk = $produk["id_produk"];
			$galeri = $this->galeri($idProduk);
			if (!isset($galeri[0]["foto"])) {
				$foto[] = '20.jpeg';
			}else{
				$foto [] = $galeri[0]["foto"];
			}
		}
		return $foto;
	}

	public function galeri($idProduk)
	{
		$query = "SELECT * FROM galeri_produk 
					INNER JOIN 
						produk ON galeri_produk.id_produk = produk.id_produk
						WHERE galeri_produk.id_produk = '$idProduk'";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function getProduk()
	{
		$query = "SELECT * FROM produk ORDER BY id_produk DESC";
		$this->db->query($query);
		return $this->db->resultset();
	}
	public function tambahtransaksi($data)
	{
		$id_transaksi = $this->autoId();
		$status = '1';
		$gambar = $this->upload();
		if (!$gambar ){
		return false;}
		$query ="INSERT INTO transaksi
					SET 
					id_transaksi = :id_transaksi,
					id_user = :id_user,					
					bukti_transaksi = :bukti_transaksi,
					total = :total,
					status = :status,
					tanggal = CURDATE(),
					kota = :kota,
					kodepos = :kodepos,
					alamat = :alamat";
		$this->db->query($query);

		$this->db->bind('id_transaksi',$id_transaksi);
		$this->db->bind('id_user',$data['id_user']);
		$this->db->bind('kota',$data['kota']);
		$this->db->bind('status',$status);
		$this->db->bind('bukti_transaksi',$gambar);
		$this->db->bind('total',$data['total']);
		$this->db->bind('kodepos',$data['kodepos']);
		$this->db->bind('alamat',$data['alamat']);

		$this->db->execute();

		$a = $this->db->rowCount();

		if ($a > 0 ) {
			$id_user = $data['id_user'];
			$query = "SELECT * FROM cart WHERE cart.id_user = '$id_user'";
			$this->db->query($query);
			$produk = $this->db->resultset();
			foreach ($produk as $data) {
				$id_detail = $this->autoIdtr();
				$query ="INSERT INTO transaksi_detail
							SET 
							id_detail_transaksi = :detail,
							id_transaksi = :id_transaksi,
							jumlah = :jumlah,
							id_produk = :id_produk";
				$this->db->query($query);

				$this->db->bind('id_transaksi',$id_transaksi);
				$this->db->bind('detail',$id_detail);
				$this->db->bind('id_produk',$data['id_produk']);
				$this->db->bind('jumlah',$data['jumlah']);

				$this->db->execute();

				$a = $this->db->rowCount();
				if ($a > 0) {
					$query = "DELETE FROM cart WHERE id_cart = :id_cart";
					$this->db->query($query);
					$this->db->bind('id_cart', $data['id_cart']);

					$this->db->execute();
				}
			}
			return 1;
		}else{
			return false;
		}
	}
	public function upload()
	{
		$namafile = $_FILES['bukti_transaksi']['name'];
		$ukuranfile = $_FILES['bukti_transaksi']['size'];
		$error = $_FILES['bukti_transaksi']['error'];
		$tmpname = $_FILES['bukti_transaksi']['tmp_name'];
		
		// cek apakah tidak ada yg diupload
		if ($error === 4) {
			echo "<script>
					alert('pilih gambar dahulu')
				</script>";
			return false;
		}

		// GENERATE NAMA GAMBAR BARU
		$ekstensigambar = explode(".", $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));
		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;
		move_uploaded_file($tmpname, 'C:/xampp/htdocs/portopolio/public/images/buktitr/' . $namafilebaru);

		return $namafilebaru;
	}
	public function autoId()
	{
		$query = "SELECT max(id_transaksi) as maxID from transaksi";
		$this->db->query($query);
		$data = $this->db->single();
		$kode = $data['maxID'];
		$data = substr($kode, 2);
		$data ++;
		$ket = 'TR';
		$kodeauto = $ket. sprintf("%03s",$data);
		return $kodeauto;
	}
	public function autoIdtr()
	{
		$query = "SELECT max(id_detail_transaksi) as maxID from transaksi_detail";
		$this->db->query($query);
		$data = $this->db->single();
		$kode = $data['maxID'];
		$data = substr($kode, 3);
		$data ++;
		$ket = 'Dtr';
		$kodeauto = $ket. sprintf("%02s",$data);
		return $kodeauto;
	}
	public function getalltransaksi($id_user)
	{
		$query = "SELECT * FROM transaksi 
					WHERE transaksi.id_user = '$id_user'";
		$this->db->query($query);
		return $this->db->resultset();
	}
	public function gettransaksibyid($id_transaksi)
	{
		$query = "SELECT * FROM transaksi_detail 
					INNER JOIN 
						produk ON transaksi_detail.id_produk = produk.id_produk
					WHERE transaksi_detail.id_transaksi = '$id_transaksi'";
		$this->db->query($query);
		return $this->db->resultset();	
	}

	public function getFototransaksi($idProduk)
	{
		foreach ($idProduk as $produk) {
			$id = $produk;
			$galeri = $this->galeri($id);
			if (!isset($galeri[0]["foto"])) {
				$foto[] = '20.jpeg';
			}else{
				$foto [] = $galeri[0]["foto"];
			}
		}
		return $foto;
	}
	public function gettransaksibyid2($id)
	{
		$this->db->query('SELECT * FROM transaksi WHERE id_transaksi= :id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}
	
	public function gettransaksi()
	{
		$query = "SELECT * FROM transaksi";
		$this->db->query($query);
		return $this->db->resultset();
	}
}