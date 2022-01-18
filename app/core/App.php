<?php 


class App
{
	protected $contoller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		$url = $this->parseURL();

		// CONTROLLERS
		if (file_exists('../app/controllers/'.$url[0].'.php')) {
			$this->contoller = $url[0];
			unset($url[0]);
		}

		require_once '../app/controllers/'.$this->contoller.'.php';
		$this->contoller = new $this->contoller;

		// METHOD
		if (isset($url[1])) {
			if (method_exists($this->contoller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// PARAMERTER
		if (!empty($url)) {
			$this->params = array_values($url);
		}

		// JALANKAN CONTROLLER & METHOD, DAN PARAMETER
		call_user_func_array([$this->contoller,$this->method], $this->params);

	}

	public function parseURL()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/ ' );
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}

 ?>