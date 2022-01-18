<?php 

class Wishlist_model
{
	// PDO database. DBH(database Handler)
	private $table = 'wishlist';
	private $db;

	public function __construct()
	{
		$this->db = new database; 
	}

	public function addToWishlist($id_user,$id)
	{
		$id_wishlist = $this->autoId();
		$query = "INSERT INTO wishlist
					VALUES 
					(:id_wishlist, :id_user, :id_produk)";
		$this->db->query($query);

		$this->db->bind('id_wishlist',$id_wishlist);
		$this->db->bind('id_user',$id_user);
		$this->db->bind('id_produk',$id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function autoId()
	{
		$query = "SELECT max(id_wishlist) as maxID from wishlist";
		$this->db->query($query);
		$data = $this->db->single();
		$kode = $data['maxID'];
		$data = substr($kode, 2);
		$data ++;
		$ket = 'WL';
		$kodeauto = $ket. sprintf("%03s",$data);
		return $kodeauto;
	}

	public function removeFromWishlist($id_wishlist)
	{
		$query = "DELETE FROM wishlist WHERE id_wishlist = :id_wishlist";
		$this->db->query($query);
		$this->db->bind('id_wishlist', $id_wishlist);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function getWishlistbyId($idProduk,$id_user)
	{
		$query = "SELECT * FROM wishlist 
					INNER JOIN 
						produk ON wishlist.id_produk = produk.id_produk
					INNER JOIN
						user ON wishlist.id_user = user.id_user
						WHERE wishlist.id_produk = '$idProduk' AND wishlist.id_user = '$id_user'";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function getAllWishlist($id_user)
	{
		$query = $this->getProduk();
		foreach ($query as $produk) {
			$idProduk = $produk["id_produk"];
			$wishlist = $this->getWishlistbyId($idProduk,$id_user);
			if (!isset($wishlist[0]["id_wishlist"])) {
				$foto[] = false;
			}else{
				$foto [] = $wishlist[0]["id_wishlist"];
			}
		}
		return $foto;
	}

	public function getProduk()
	{
		$query = "SELECT * FROM produk ORDER BY id_produk DESC";
		$this->db->query($query);
		return $this->db->resultset();
	}
	public function getWishlist($id_user)
	{
		$query = "SELECT * FROM $this->table 
					INNER JOIN 
					produk ON wishlist.id_produk = produk.id_produk
					WHERE wishlist.id_user = '$id_user'";
		$this->db->query($query);
		return $this->db->resultset();
	}
}