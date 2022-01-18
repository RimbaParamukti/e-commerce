<?php 

/**
 * 
 */
class User_data extends Controller
{
	public function index()
	{
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$data['judul'] ='biodata';
		$this->view('templates/header', $data);
		$this->view('home/biodata',$data);
		$this->view('templates/footer');
	}

	public function login()
	{
		$data['judul'] ='Login-Registrasi';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$this->view('templates/header', $data);
		$this->view('home/login');
		$this->view('templates/footer');
	}

	public function tambahAkun()
	{
		if ($this->model('UserData_model')->tambahDataUser($_POST)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/User_data/login'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}
	}

	public function LoginAkun()
	{
		if ($this->model('UserData_model')->login($_POST) == true) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/User_data'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/User_data/login'
				</script>";
		}
	}

	public function Logout()
	{
		if ($this->model('UserData_model')->Logout() == true) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/User_data/login'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}
	}

	public function editDataUser()
	{
		if ($this->model('UserData_model')->EditData($_POST)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Home'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin_Galeri/tambahgaleri'
				</script>";
		}
	}
	public function Resetpassword()
	{
		if ($this->model('UserData_model')->gantipw($_POST)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/User_data'
                </script>";
		}
		else{
			echo "<script>
					alert('GAGAL')
				</script>";
		}
	}

	public function LoginAdmin()
	{
		if ($this->model('UserData_model')->loginadmin($_POST) == true) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin/login'
				</script>";
		}
	}
}
 ?>