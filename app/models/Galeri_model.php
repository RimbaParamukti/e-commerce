<?php 

/**
 * 
 */
class Galeri_model
{
	// PDO database. DBH(database Handler)
	private $table = 'galeri_produk';
	private $db;

	public function __construct()
	{
		$this->db = new database; 
	}

	public function getAllGaleri()
	{
		$query = "SELECT * FROM $this->table 
					INNER JOIN 
						produk ON $this->table.id_produk = produk.id_produk";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function tambahData($data)
	{
		$id_galeri = $this->autoId();
		$gambar = $this->upload();
		if (!$gambar ){
		return false;}
		$query = "INSERT INTO $this->table
					VALUES 
					(:id_galeri,:id_produk,:gambar)";

		$this->db->query($query);

		$this->db->bind('id_galeri',$id_galeri);
		$this->db->bind('id_produk',$data['id_produk']);
		$this->db->bind('gambar',$gambar);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function upload()
	{
		$namafile = $_FILES['pic']['name'];
		$ukuranfile = $_FILES['pic']['size'];
		$error = $_FILES['pic']['error'];
		$tmpname = $_FILES['pic']['tmp_name'];
		
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
		move_uploaded_file($tmpname, 'C:/xampp/htdocs/portopolio/public/images/product/' . $namafilebaru);

		return $namafilebaru;
	}

	public function autoId()
	{
		$query = "SELECT max(id_galeri) as maxID from $this->table";
		$this->db->query($query);
		$data = $this->db->single();
		$kode = $data['maxID'];
		$data = substr($kode, 3);
		$data ++;
		$ket = 'GLR';
		$kodeauto = $ket. sprintf("%02s",$data);
		return $kodeauto;
	}

	// EDIT GALERI
	public function editData($data)
	{
		$gambar = $this->upload();
		if (!$gambar ){
		return false;}
		$query = "UPDATE $this->table SET
				id_produk = :id_produk,
				foto = :gambar
				WHERE id_galeri = :id_galeri";

		$this->db->query($query);

		$this->db->bind('id_galeri',$data['id_galeri']);
		$this->db->bind('id_produk',$data['id_produk']);
		$this->db->bind('gambar',$gambar);

		$this->db->execute();

		return $this->db->rowCount();
	}

	// Hapus Galeri
	public function HapusData($data)
	{
		$query = "DELETE FROM $this->table WHERE id_galeri = :id_galeri";
		$this->db->query($query);
		$this->db->bind('id_galeri', $data);

		$this->db->execute();

		return $this->db->rowCount();
	}
}