<?php 
class Produk_model
{
	// PDO database. DBH(database Handler)
	private $table = 'produk';
	private $db;

	public function __construct()
	{
		$this->db = new database; 
	}

	public function getAllProduk()
	{
		$query = "SELECT * FROM $this->table 
					INNER JOIN 
						kategori ON $this->table.id_kategori = kategori.id_kategori";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function tambahData($data)
	{
		$id_produk = $this->autoId();
		$query = "INSERT INTO $this->table 
				VALUES 
				(:id_produk,:nama_produk,:deskripsi,:harga,:harga_diskon,:ukuran,:stok,:id_kategori)";
		$this->db->query($query);

		$this->db->bind('id_produk',$id_produk);
		$this->db->bind('nama_produk',$data['nama_produk']);
		$this->db->bind('deskripsi',$data['deskripsi']);
		$this->db->bind('harga',$data['harga']);
		$this->db->bind('harga_diskon',$data['harga_diskon']);
		$this->db->bind('ukuran',$data['ukuran']);
		$this->db->bind('stok',$data['stok']);
		$this->db->bind('id_kategori',$data['id_kategori']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function autoId()
	{
		$query = "SELECT max(id_produk) as maxID from $this->table";
		$this->db->query($query);
		$data = $this->db->single();
		$kode = $data['maxID'];
		$data = substr($kode, 2);
		$data ++;
		$ket = 'PR';
		$kodeauto = $ket. sprintf("%03s",$data);
		return $kodeauto;
	}

	public function getprodukbyId($id)
	{
		$this->db->query("SELECT * FROM $this->table WHERE id_produk = :id");
		$this->db->bind('id',$id);

		return $this->db->single();	
	}

	public function editData($data)
	{
		$query = "UPDATE $this->table SET
				nama_produk = :nama_produk,
				deskripsi = :deskripsi,
				harga = :harga,
				harga_diskon = :harga_diskon,
				ukuran = :ukuran,
				stok = :stok,
				id_kategori = :id_kategori
				WHERE id_produk = :id_produk";

		$this->db->query($query);

		$this->db->bind('id_produk',$data['id_produk']);
		$this->db->bind('nama_produk',$data['nama_produk']);
		$this->db->bind('deskripsi',$data['deskripsi']);
		$this->db->bind('harga',$data['harga']);
		$this->db->bind('harga_diskon',$data['harga_diskon']);
		$this->db->bind('ukuran',$data['ukuran']);
		$this->db->bind('stok',$data['stok']);
		$this->db->bind('id_kategori',$data['id_kategori']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusData($id_produk)
	{
		$query = "DELETE FROM $this->table WHERE id_produk = :id_produk";
		$this->db->query($query);
		$this->db->bind('id_produk', $id_produk);

		$this->db->execute();

		return $this->db->rowCount();
		
	}

	
}