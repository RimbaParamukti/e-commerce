<?php 

/**
 * 
 */
class Produk extends Controller
{
	public function index()
	{
		$data['judul'] ='Our Product';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['kategori'] = $this->model('Kategori_model')->getAllKategori();
		$data['produk'] = $this->model('Home_model')->getProduk();
		$data['foto'] = $this->model('Home_model')->getFoto();
		if (isset($data['user']['id_user'])) {
			$data['Wishlist'] = $this->model('Wishlist_model')->getAllWishlist($data['user']['id_user']);
		}
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$this->view('templates/header', $data);
		$this->view('home/Product',$data);
		$this->view('templates/footer');
	}
	
	public function detailproduk($id_produk)
	{
		$data['judul'] ='Detail Produk';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['produk'] = $this->model('Home_model')->getDetailProduk($id_produk);
		$data['galeri'] = $this->model('Home_model')->getAllGaleri($id_produk);
		if (isset($data['user']['id_user'])) {
			$data['Wishlist'] = $this->model('Wishlist_model')->getWishlistbyId($id_produk,$data['user']['id_user']);
		}
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$this->view('templates/header', $data);
		$this->view('home/detailproduk',$data);
		$this->view('templates/footer');
	}
}