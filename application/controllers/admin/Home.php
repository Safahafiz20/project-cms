<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	// public function __construct(){
	// 	parent::__construct();
	// 	if($this->session->userdata('level')==NULL){
    //         redirect('auth');
    //     }elseif ($this->session->userdata('level')=='user'){
	// 		redirect('home');
	// 	}else{
	// 		redirect('admin/user');
	// 	}
    
	// }
 	public function index(){
		$data = array(
			'judul_halaman' => 'dashboard'
		);
		$this->template->load('template_admin','admin/dashboard',$data);
	}
}
