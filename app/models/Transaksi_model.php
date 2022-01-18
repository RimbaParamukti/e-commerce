<?php 

class Transaksi_model
{
	// PDO database. DBH(database Handler)
	private $table = 'transaksi';
	private $db;

	public function __construct()
	{
		$this->db = new database; 
	}

	public function update($data)
	{
		if (isset($_POST["konfirmasi"])) {
			$query = "UPDATE $this->table SET
				status = :status
				WHERE id_transaksi = :id_transaksi";

			$this->db->query($query);

			$this->db->bind('id_transaksi',$data['id']);
			$this->db->bind('status',$data['status']);
			$this->db->execute();

			return $this->db->rowCount();

		}elseif(isset($_POST["gagal"])){
			$status = 0;
			$query = "UPDATE $this->table SET
				status = :status
				WHERE id_transaksi = :id_transaksi";

			$this->db->query($query);

			$this->db->bind('id_transaksi',$data['id']);
			$this->db->bind('status',$status);
			$this->db->execute();

			return $this->db->rowCount();
		}elseif(isset($_POST["konfirmasiresi"])){
			$status = 3;
			$query = "UPDATE $this->table SET
				status = :status,
				resi = :resi
				WHERE id_transaksi = :id_transaksi";

			$this->db->query($query);

			$this->db->bind('id_transaksi',$data['id']);
			$this->db->bind('resi',$data['resi']);
			$this->db->bind('status',$status);
			$this->db->execute();

			return $this->db->rowCount();
		}
	}
}
