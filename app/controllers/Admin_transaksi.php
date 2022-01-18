<?php 

/**
 * 
 */
class Admin_transaksi extends controller
{
	
	public function index()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['transaksi'] = $this->model('Home_model')->gettransaksi();
		$this->view('templates/header-admin',$data);
		$this->view('admin/transaksi/index',$data);
		$this->view('templates/footer-admin');
	}

	public function detail($id_transaksi)
	{
		$data['detailtransaksi'] = $this->model('Home_model')->gettransaksibyid($id_transaksi);
		foreach ($data['detailtransaksi'] as $a) {
			$produk[] = $a['id_produk'];
		}
		$data['fototransaksi'] = $this->model('Home_model')->getFototransaksi($produk);
		$data['transaksi'] = $this->model('Home_model')->gettransaksibyid2($id_transaksi);
		$data['user'] = $this->model('UserData_model')->GetUserbyIdtransaksi($data['transaksi']['id_user']);
		$this->view('templates/header-admin');
		$this->view('admin/transaksi/detail',$data);
		$this->view('templates/footer-admin');
	}
	public function konfirmasipembayaran()
	{
		if (isset($_POST["konfirmasi"])) {
			if ($this->model('Transaksi_model')->update($_POST) > 0) {
				echo "<script>
                    document.location.href = '".BASEURL."/Admin_transaksi/index'
                </script>";
			}
		}elseif(isset($_POST["gagal"])){
			if ($this->model('Transaksi_model')->update($_POST) > 0) {
				echo "<script>
                    document.location.href = '".BASEURL."/Admin_transaksi/index'
                </script>";
			}
		}elseif (isset($_POST["konfirmasiresi"])) {
			if ($this->model('Transaksi_model')->update($_POST) > 0) {
				echo "<script>
                    document.location.href = '".BASEURL."/Admin_transaksi/index'
                </script>";
			}
		}
	}
}
 ?>