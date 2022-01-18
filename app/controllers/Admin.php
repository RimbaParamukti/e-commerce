<?php 

class Admin extends Controller
{
	public function index()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$this->view('templates/header-admin',$data);
		$this->view('admin/index');
		$this->view('templates/footer-admin');
	}
	public function login()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$this->view('admin/login',$data);
	}
	public function user()
	{
		$data['admin'] = $this->model('UserData_model')->GetAdminbyId();
		$data['user'] = $this->model('UserData_model')->getAllUser();
		$this->view('templates/header-admin',$data);
		$this->view('admin/user',$data);
		$this->view('templates/footer-admin');
	}

	public function hapusdatauser($id_user)
	{
		if ($this->model('UserData_model')->hapusData($id_user)>0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Admin/user'
                </script>";
		}
		else{
			echo "<script>
				document.location.href = '".BASEURL."/Admin/user'
				</script>";
		}
	}

}