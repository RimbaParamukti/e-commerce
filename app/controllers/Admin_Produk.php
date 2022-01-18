<?php 

class Admin_Produk extends Controller
{
	public function index()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['produk'] = $this->model('Produk_model')->getAllProduk();
		$this->view('templates/header-admin',$data);
		$this->view('admin/produk/product',$data);
		$this->view('templates/footer-admin');
	}

	public function tambahproduct()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['kat'] = $this->model('Kategori_model')->getAllKategori();
		$this->view('templates/header-admin',$data);
		$this->view('admin/produk/tambah-product',$data);
		$this->view('templates/footer-admin');
	}

	public function tambahDataProduk()
	{
		if ($this->model('Produk_model')->TambahData($_POST)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin_Produk'
                </script>";
		}
	}

	public function edit_Produk($id_produk)
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['kat'] = $this->model('Kategori_model')->getAllKategori();
		$data['produk'] = $this->model('Produk_model')->getProdukbyId($id_produk);
		$this->view('templates/header-admin',$data);
		$this->view('admin/produk/editproduct',$data);
		$this->view('templates/footer-admin');
		// var_dump($data['produk']);
	}

	public function editDataProduk()
	{
		if ($this->model('Produk_model')->EditData($_POST)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin_Produk'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}		
	}

	public function hapusDataProduk($id_produk)
	{
		if ($this->model('Produk_model')->hapusData($id_produk)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin_Produk'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}
	}

}


 ?>