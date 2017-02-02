<?php
	class home extends CI_controller{

		public function index (){
			$this->load->view('./plantillas/header');
			$this->load->view('index');
			$this->load->view('./plantillas/endbody');
			$this->load->view('./plantillas/footer');
		}

		public function gtav (){
			$this->load->view('gtav');
		}


	}
?>