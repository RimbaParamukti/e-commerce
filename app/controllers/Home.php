<?php 

class Home extends Controller
{
	public function index()
	{
		$data['judul'] ='Home';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['kategori'] = $this->model('Kategori_model')->getAllKategori();
		$data['produk'] = $this->model('Home_model')->getProduk();
		$data['foto'] = $this->model('Home_model')->getFoto();
		if (isset($data['user']['id_user'])) {
			$data['Wishlist'] = $this->model('Wishlist_model')->getAllWishlist($data['user']['id_user']);
		}
		if (isset($data['user']['id_user'])) {
			$data['Cart'] = $this->model('Cart_model')->getAllCart($data['user']['id_user']);
		}
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}

	public function about()
	{
		$data['judul'] ='About Us';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$this->view('templates/header', $data);
		$this->view('home/AboutUs');
		$this->view('templates/footer');
	}
	public function checkout()
	{
		$data['judul'] ='Checkout';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$this->view('templates/header', $data);
		$this->view('home/checkout',$data);
		$this->view('templates/footer');
	}
	public function transaksi()
	{
		$data['judul'] ='Transaksi';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$data['transaksi'] = $this->model('Home_model')->getalltransaksi($data['user']['id_user']);
		$this->view('templates/header', $data);
		$this->view('home/transaksi',$data);
		$this->view('templates/footer');
	}
	public function detailtransaksi($id_transaksi)
	{
		$data['judul'] ='detailtransaksi';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$data['detailtransaksi'] = $this->model('Home_model')->gettransaksibyid($id_transaksi);
		foreach ($data['detailtransaksi'] as $a) {
			$produk[] = $a['id_produk'];
		}
		$data['fototransaksi'] = $this->model('Home_model')->getFototransaksi($produk);
		$data['transaksi'] = $this->model('Home_model')->gettransaksibyid2($id_transaksi);
		$this->view('templates/header', $data);
		$this->view('home/detailtransaksi',$data);
		$this->view('templates/footer');
	}

	public function transaksi1()
	{
		if ($this->model('Home_model')->tambahtransaksi($_POST)>0) {
			echo "<script>
                    alert('Transaksi Akan Diproses')
                    document.location.href = '".BASEURL."/Home/transaksi'
                </script>";		
		}
	}
}

 ?>