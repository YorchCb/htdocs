<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	class panel extends CI_controller{


		public function panel_control(){
			$data['titulo'] = 'Panel de control';

			$this->load->view('./plantillas/head', $data);
			$this->load->view("./panel/panel_control");
			$this->load->view('./plantillas/footer');
		}

		public function admin(){
			$data['titulo'] = 'Panel de administrador';

			$this->load->view('./plantillas/head', $data);
			$this->load->view("./panel/admin");
			$this->load->view('./plantillas/footer');
		}
}