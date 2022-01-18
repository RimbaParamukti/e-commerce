<?php 

class Cart_model
{
	// PDO database. DBH(database Handler)
	private $table = 'cart';
	private $db;

	public function __construct()
	{
		$this->db = new database; 
	}

	public function tambahCart($data)
	{
		// edit jumlah produk
		$this->db->query("SELECT * FROM produk WHERE id_produk = :id");
		$this->db->bind('id',$data["id_produk"]);
		$data['produk'] = $this->db->single();
		if ($data['produk']['stok']<=0) {
			return 'habis';
		}elseif ($data["qtybutton"] == 0) {
			return 'habis1';
		}

		$jumlah = $data['produk']['stok'] - $data["qtybutton"];	
		$produk = "UPDATE produk SET stok = :jumlah WHERE produk.id_produk = :id_produk";
		$this->db->query($produk);

		$this->db->bind('jumlah',$jumlah);
		$this->db->bind('id_produk',$data["id_produk"]);
		$this->db->execute();
		$a = $this->db->rowCount();
		if ($a > 0) {
			// Tambah Cart
			$id_cart = $this->autoId();
			$query = "INSERT INTO cart
						VALUES 
						(:id_cart, :id_user, :id_produk, :jumlah)";
			$this->db->query($query);

			$this->db->bind('id_cart',$id_cart);
			$this->db->bind('id_user',$data["user"]);
			$this->db->bind('id_produk',$data["id_produk"]);
			$this->db->bind('jumlah',$data["qtybutton"]);

			$this->db->execute();

			return $this->db->rowCount();
		}else{
			return false;
		}
	}


	public function addToCart($id_user,$id)
	{
		// edit jumlah produk
		$this->db->query("SELECT * FROM produk WHERE id_produk = :id");
		$this->db->bind('id',$id);
		$data['produk'] = $this->db->single();
		if ($data['produk']['stok']<=0) {
			return 'habis';
		}
		$jumlah = $data['produk']['stok'] - 1;	
		$produk = "UPDATE produk SET stok = :jumlah WHERE produk.id_produk = :id_produk";
		$this->db->query($produk);

		$this->db->bind('jumlah',$jumlah);
		$this->db->bind('id_produk',$id);
		$this->db->execute();
		$a = $this->db->rowCount();
		if ($a > 0) {
			$jumlah = 1;
			$id_cart = $this->autoId();
			$query = "INSERT INTO cart
						VALUES 
						(:id_cart, :id_user, :id_produk, :jumlah)";
			$this->db->query($query);

			$this->db->bind('id_cart',$id_cart);
			$this->db->bind('id_user',$id_user);
			$this->db->bind('id_produk',$id);
			$this->db->bind('jumlah',$jumlah);

			$this->db->execute();
			return $this->db->rowCount();
		}else{
			return false;
		}
	}

	public function autoId()
	{
		$query = "SELECT max(id_cart) as maxID from cart";
		$this->db->query($query);
		$data = $this->db->single();
		$kode = $data['maxID'];
		$data = substr($kode, 2);
		$data ++;
		$ket = 'Cr';
		$kodeauto = $ket. sprintf("%03s",$data);
		return $kodeauto;
	}

	public function getAllCart($id_user)
	{
		$query = $this->getProduk();
		foreach ($query as $produk) {
			$idProduk = $produk["id_produk"];
			$cart = $this->getcartbyId($idProduk,$id_user);
			if (!isset($cart[0]["id_cart"])) {
				$carts[] = false;
			}else{
				$carts[] = $cart[0]["id_cart"];
			}
		}
		return $carts;
	}
	public function getProduk()
	{
		$query = "SELECT * FROM produk ORDER BY id_produk DESC";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function getCartbyId($idProduk,$id_user)
	{
		$query = "SELECT * FROM cart 
					INNER JOIN 
						produk ON cart.id_produk = produk.id_produk
					INNER JOIN
						user ON cart.id_user = user.id_user
						WHERE cart.id_produk = '$idProduk' AND cart.id_user = '$id_user'";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function getcart($id_user)
	{
		$query = "SELECT * FROM $this->table 
					INNER JOIN 
					produk ON cart.id_produk = produk.id_produk
					WHERE cart.id_user = '$id_user'";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function removeFromCart($id_cart)
	{
		// edit jumlah produk
		$this->db->query("SELECT * FROM cart WHERE id_cart = :id");
		$this->db->bind('id',$id_cart);
		$data['cart'] = $this->db->single();

		$this->db->query("SELECT * FROM produk WHERE id_produk = :id");
		$this->db->bind('id',$data['cart']['id_produk']);
		$data['produk'] = $this->db->single();

		$jumlah = $data['cart']['jumlah'] + $data['produk']['stok']	;

		$produk = "UPDATE produk SET stok = :jumlah WHERE produk.id_produk = :id_produk";
		$this->db->query($produk);

		$this->db->bind('jumlah',$jumlah);
		$this->db->bind('id_produk',$data["produk"]["id_produk"]);
		$this->db->execute();
		$a = $this->db->rowCount();
		if ($a > 0) {
			$query = "DELETE FROM cart WHERE id_cart = :id_cart";
			$this->db->query($query);
			$this->db->bind('id_cart', $id_cart);

			$this->db->execute();

			return $this->db->rowCount();
		}else{
			return 0;
		}
	}

	public function getFoto($id_user)
	{
		$query = $this->getcart($id_user);
		foreach ($query as $produk) {
			$idProduk = $produk["id_produk"];
			$galeri = $this->galeri($idProduk);
			if (!isset($galeri[0]["foto"])) {
				$foto[] = '20.jpeg';
			}else{
				$foto [] = $galeri[0]["foto"];
			}
		}
		if (isset($foto)) {
			return $foto;
		}else{
			return false;
		}
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

	public function getcart1($id_cart)
	{
		$this->db->query("SELECT * FROM ".$this->table." WHERE id_cart = ':id' ");
		$this->db->bind('id',$id_cart);
		return $this->db->single();	
	}
}
 ?>