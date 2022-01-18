<?php 

class UserData_model
{
	private $table = 'user';
	private $db;

	public function __construct()
	{
		$this->db = new database; 
	}

	public function tambahDataUser($data)
	{
		// cek username sudah ada atau belum
		$query = "SELECT * FROM 
					$this->table WHERE username = :id";
		$this->db->query($query);
		$this->db->bind('id',$data['username']);

		$result = $this->db->rowCount();

		if ($this->db->single()) {
			echo "<script>
				alert('username sudah ada')
			</script>";
			return false;
		}


		// cek konfirmasi password
		if ( $data['password'] !== $data['RePassword'] ) {
			echo "<script>
				alert('Password tidak sesuai')
			</script>";
			return false;
		}

		// enskripsi password
		$password = password_hash($data['password'], PASSWORD_DEFAULT);

		// buat id
		$id_user = $this->autoId();

		// tambahkan userbaru ke database
		$query ="INSERT INTO $this->table
					SET 
					id_user = :id_user,
					username = :username,
					password = :password,
					notelp = :notelp";
		$this->db->query($query);

		$this->db->bind('id_user',$id_user);
		$this->db->bind('password',$password);
		$this->db->bind('username',$data['username']);
		$this->db->bind('notelp',$data['notelp']);

		$this->db->execute();

		return $this->db->rowCount();

	}

	public function autoId()
	{
		$query = "SELECT max(id_user) as maxID from $this->table";
		$this->db->query($query);
		$data = $this->db->single();
		$kode = $data['maxID'];
		$data = substr($kode, 3);
		$data ++;
		$ket = 'Usr';
		$kodeauto = $ket. sprintf("%02s",$data);
		return $kodeauto;
	}


	// Login
	public function login($data)	
	{
		$query = "SELECT * FROM 
					$this->table WHERE username = :id";
		$this->db->query($query);
		$this->db->bind('id', $data['username']);

		$result = $this->db->single();

		if ( $this->db->rowCount()=== 1) {
			if (password_verify($data['password'], $result['password'])) {
				
				$_SESSION["id_user"] = $result['id_user'];
				$_SESSION["user"] = true;

				return true;
				exit;
			}
			echo "<script>
				alert('Password Salah')
			</script>";
		return false;
		}
		echo "<script>
				alert('Username Anda Salah')
			</script>";
		return false;
	}


	public function Logout()
	{
		$_SESSION = [];
		session_unset();
		session_destroy();
		return true;
	}

	public function GetAllUser()
	{
		$query = $query = "SELECT * FROM 
					$this->table";
		$this->db->query($query);
		return $this->db->resultset();
	}

	public function GetUserbyId()
	{
		if (isset($_SESSION["id_user"])) {
			$query = "SELECT * FROM 
					$this->table WHERE id_user = :id";
			$this->db->query($query);
			$this->db->bind('id', $_SESSION["id_user"]);

			return $this->db->single();	
		}else{
			return false;
		}		
	}

	public function editData($data)
	{
		$query = "UPDATE $this->table SET
				nama_pelanggan = :nama_pelanggan,
				notelp = :notelp,
				provinsi = :provinsi,
				kota = :kota,
				kecamatan = :kecamatan,
				kelurahan = :kelurahan,
				kodepos = :kodepos,
				alamat_lengkap = :alamat_lengkap
				WHERE id_user = :id_user";

		$this->db->query($query);

		$this->db->bind('id_user',$data['id_user']);
		$this->db->bind('nama_pelanggan',$data['nama']);
		$this->db->bind('notelp',$data['notelp']);
		$this->db->bind('provinsi',$data['provinsi']);
		$this->db->bind('kota',$data['kota']);
		$this->db->bind('kecamatan',$data['kecamatan']);
		$this->db->bind('kelurahan',$data['kelurahan']);
		$this->db->bind('kodepos',$data['kodepos']);
		$this->db->bind('alamat_lengkap',$data['Alamat']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function gantipw($data)
	{
		$query = "SELECT * FROM 
					$this->table WHERE id_user = :id";
		$this->db->query($query);
		$this->db->bind('id', $data['id_user']);

		$result = $this->db->single();

		if ( $this->db->rowCount()=== 1) {
			if (password_verify($data['pwlama'], $result['password'])) {
				if ( $data['pwbaru'] !== $data['repwbaru'] ) {
					echo "<script>
						alert('Password tidak sesuai')
					</script>";
					return false;
				}

				$password = password_hash($data['pwbaru'], PASSWORD_DEFAULT);
				
				$query = "UPDATE $this->table SET
				password = :password
				WHERE id_user = :id_user";

				$this->db->query($query);

				$this->db->bind('id_user',$data['id_user']);
				$this->db->bind('password',$password);

				$this->db->execute();
				return $this->db->rowCount();
			}
		}
		echo "<script>
						alert('PasswordSalah')
					</script>";
		return false;
	}

	public function hapusData($id_user)
	{
		$query = "DELETE FROM $this->table WHERE id_user = :id_user";
		$this->db->query($query);
		$this->db->bind('id_user', $id_user);

		$this->db->execute();

		return $this->db->rowCount();
		
	}

	public function GetUserbyIdtransaksi($id)
	{
		$query = "SELECT * FROM 
				$this->table WHERE id_user = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		return $this->db->single();	
	}
	public function loginadmin($data)	
	{
		$query = "SELECT * FROM 
					admin WHERE username = :username";
		$this->db->query($query);
		$this->db->bind('username', $data['uname']);

		$result = $this->db->single();

		if ( $this->db->rowCount()=== 1) {
			if (password_verify($data['pw'], $result['password'])) {
				
				$_SESSION["admin"] = true;

				return true;
				exit;
			}
			echo "<script>
				alert('Password Salah')
			</script>";
		return false;
		}
		echo "<script>
				alert('Username Anda Salah')
			</script>";
		return false;
	}

	public function GetAdminbyId()
	{
		if (isset($_SESSION["admin"])) {

			return true;	
		}else{
			return false;
		}		
	}

}

 ?>