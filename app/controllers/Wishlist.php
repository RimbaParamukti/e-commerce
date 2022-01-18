<?php 

/**
 * 

 */
class Wishlist extends Controller
{
	
	public function index()
	{
		$data['judul'] ='Wishlist';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['Wishlist'] = $this->model('Wishlist_model')->getWishlist($data['user']['id_user']);
		$data['foto'] = $this->model('Home_model')->getFoto();
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$this->view('templates/header', $data);
		$this->view('home/wishlist',$data);
		$this->view('templates/footer');
	}

	public function tambahwishlist($id_user,$id,$i)
	{
		if ($this->model('Wishlist_model')->addToWishlist($id_user,$id)) {
			if ($i == "detailproduk") {
				header('Location:'.BASEURL.'/produk/detailproduk/'.$id.'#detailproduk');
				exit;
			}else{
				header('Location:'.BASEURL.'#'.$i);
				exit;
			}
		}

	}
	public function hapuswishlist($id_wishlist,$id,$i)
	{
		if ($this->model('Wishlist_model')->removeFromWishlist($id_wishlist)) {
			if ($i == "detailproduk") {
				header('Location:'.BASEURL.'/produk/detailproduk/'.$id.'#detailproduk');
				exit;
			}elseif ($i == "Wishlist") {
				header('Location:'.BASEURL.'/wishlist#table');
				exit;
			}{
				header('Location:'.BASEURL.'#'.$i);
				exit;
			}
		}

	}

}