<?php 

class Kategori_model
{
	// PDO database. DBH(database Handler)
	private $table = 'kategori';
	private $db;

	public function __construct()
	{
		$this->db = new database; 
	}

	public function autoId($id,$table)
	{
		$query = "SELECT max($id) as maxID from $table";
		$this->db->query($query);
		$data = $this->db->single();
		$kode = $data['maxID'];
		$data = substr($kode, 1);
		$data ++;
		if ($id == 'id_kategori') {
			$ket = "K";
		}
		else{
			$ket = "Id";
		}
		$kodeauto = $ket. sprintf("%02s",$data);
		return $kodeauto;
	}

	public function tambahData($data)
	{
		$id_kategori = $this->autoId('id_kategori',$this->table);
		$query = "INSERT INTO kategori VALUES (:id_kategori,:kategori)";
		$this->db->query($query);
		$this->db->bind('id_kategori',$id_kategori);
		$this->db->bind('kategori',$data['kategori']);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function getAllKategori()
	{
		$query = "SELECT * FROM  $this->table";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function getKategoribyId($id)
	{
		$this->db->query("SELECT * FROM $this->table WHERE id_kategori = :id");
		$this->db->bind('id',$id);

		return $this->db->single();	
	}

	public function editData($data)
	{
		$query = "UPDATE $this->table SET
				nama_kategori = :nama_kategori
				WHERE id_kategori = :id_kategori";

		$this->db->query($query);

		$this->db->bind('id_kategori',$data['id_kategori']);
		$this->db->bind('nama_kategori',$data['kategori']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusData($data)
	{
		$query = "DELETE FROM $this->table WHERE id_kategori = :id_kategori";
		$this->db->query($query);
		$this->db->bind('id_kategori', $data);

		$this->db->execute();

		return $this->db->rowCount();
	}
}