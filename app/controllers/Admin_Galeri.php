<?php 
/**
 * 
 */
class Admin_Galeri extends Controller
{
	public function index()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['galeri'] = $this->model('Galeri_model')->getAllGaleri();
		$this->view('templates/header-admin',$data);
		$this->view('admin/galeri/daftargaleri',$data);
		$this->view('templates/footer-admin');
	}
	public function tambahgaleri()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['produk'] = $this->model('Produk_model')->getAllProduk();
		$this->view('templates/header-admin',$data);
		$this->view('admin/galeri/tambahgaleri',$data);
		$this->view('templates/footer-admin');
	}
	public function tambahDataGaleri()
	{
		if ($this->model('Galeri_model')->TambahData($_POST)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin_Galeri'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}
		// var_dump($this->model('Galeri_model')->TambahData($_POST));
	}

	public function edit($id_galeri)
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['produk'] = $this->model('Produk_model')->getAllProduk();
		$data['id_galeri'] = $id_galeri;
		$this->view('templates/header-admin',$data);
		$this->view('admin/galeri/editgaleri',$data);
		$this->view('templates/footer-admin');
	}

	public function editDataGaleri()
	{
		if ($this->model('Galeri_model')->EditData($_POST)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin_Galeri'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}
		var_dump($_POST);
	}

	public function hapus($id_galeri)
	{
		if ($this->model('Galeri_model')->HapusData($id_galeri)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin_Galeri'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}
	}
}