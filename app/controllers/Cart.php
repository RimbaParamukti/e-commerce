<?php 
class Cart extends Controller
{
	public function index()
	{
		$data['judul'] ='Cart';
		$data['user'] = $this->model('UserData_model')->GetUserbyId();
		$data['Cart'] = $this->model('Cart_model')->getCart($data['user']['id_user']);
		$data['fotocart'] = $this->model('Cart_model')->getFoto($data['user']['id_user']);
		$this->view('templates/header',$data);
		$this->view('home/cart',$data);
		$this->view('templates/footer');
	}
	public function tambahcart($id_user,$id,$a)
	{
		if ($this->model('Cart_model')->addToCart($id_user,$id) > 0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Cart'
                </script>";
		} elseif ($this->model('Cart_model')->addToCart($id_user,$id) == 'habis') { if ($a == "index") {
				echo "<script>
                alert('Barang Habis')
                document.location.href = '".BASEURL."'
               </script>";
			}elseif ($a == "shop") {
				echo "<script>
                alert('Barang Habis')
                document.location.href = '".BASEURL."/Produk'
               </script>";
			}
		}
    }

    public function hapusCart($id_Cart)
	{
		if ($this->model('Cart_model')->removeFromCart($id_Cart)) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Cart'
                </script>";
		}
		else{die;
		}
	}

	public function hapusCart1()
	{
		$this->model('Cart_model')->removeFromCart($_POST['id']);
	}

	public function jumlah($harga,$jumlah)
	{ 
		$totals = $jumlah - $harga;
		?><li class="total__price">IDR <?php echo number_format($totals) ?><input type="hidden" name="total" id="total" value="<?php echo $totals ?>"></li><?php 
	}

	public function jumlah1($harga,$jumlah)
	{
		$Totals = $jumlah - $harga;
		?><td class="total__price1">
			<strong><span class="amount">IDR<?php echo number_format($Totals) ?></span></strong>
		</td><?php
	}

	public function buynow()
	{
		if ($this->model('Cart_model')->tambahCart($_POST) > 0) {
			echo "<script>
                    alert('Berhasil')
                    document.location.href = '".BASEURL."/Cart'
                </script>";
		}elseif ($this->model('Cart_model')->tambahCart($_POST) == 'habis') {
			echo "<script>
				alert('Barang Habis')
				document.location.href = '".BASEURL."'
            </script>";
        }elseif ($this->model('Cart_model')->tambahCart($_POST) == 'habis1') {
			echo "<script>
				alert('Masukan jumlah Barang')
                document.location.href = '".BASEURL."'
            </script>";
        }else{
        	echo $this->model('Cart_model')->tambahCart($_POST);
        }
	}
}

 ?>