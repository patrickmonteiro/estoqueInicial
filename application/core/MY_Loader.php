<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

	public function template($nome, $dados = array()){
		$this->view("head/head");
        $this->view($nome, $dados);
        $this->view("footer/footer");
	}

}