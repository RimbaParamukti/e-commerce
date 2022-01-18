<?php 

/**
 * 
 */
class Admin_Kategori extends controller
{
	public function index()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['kat'] = $this->model('Kategori_model')->getAllKategori();
		$this->view('templates/header-admin',$data);
		$this->view('admin/kategori/kategori',$data);
		$this->view('templates/footer-admin');
	}

	public function tambahkategori()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$this->view('templates/header-admin',$data);
		$this->view('admin/kategori/tambah-kategori');
		$this->view('templates/footer-admin');
	}

	public function tambahDataKategori()
	{
		if ($this->model('Kategori_model')->TambahData($_POST)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin_kategori'
                </script>";
		}
		else{
			echo "<script>
                    alert('Anda Belum Login')
                </script>";
		}
	}

	public function edit_kategori($id_kategori)
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['kat'] = $this->model('Kategori_model')->getKategoribyId($id_kategori);
		$this->view('templates/header-admin',$data);
		$this->view('admin/kategori/editkategori',$data);
		$this->view('templates/footer-admin');
	}

	public function editDataKategori()
	{
		if ($this->model('Kategori_model')->EditData($_POST)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin_Kategori'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}
	}

	public function hapusDataKategori($id_kategori)
	{
		if ($this->model('Kategori_model')->hapusData($id_kategori)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin_Kategori'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}
	}

}