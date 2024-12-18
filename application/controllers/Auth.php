<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
        $this->load->model('user_model'); 
	}
 	public function index(){
		$this->load->view('login');
	}
    public function login(){
        $username = $this->input->post('username');
        $password= md5 ($this->input->post('password')) ;
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->row();
        if($cek==NULL){
            $this->session->set_flashdata('alert','
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
             user tidak ada
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>');
         redirect('auth');
        }else if($password==$cek->password) {
            $data = array (
                'id_user' =>$cek->id_user,
                'nama' =>$cek->nama,
                'username' =>$cek->username,
                'level' =>$cek->level,
            );
            $this->session->set_userdata($data);
                redirect('admin/home');
            }else {
                $this->session->set_flashdata('alert','
            <div class="alert alert-dark alert-dismissible mb-0" role="alert">
                 user tidak ada
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>');
             redirect('auth');
        }

    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
             user sudah ada
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>');
         redirect('admin/user');
        }
        $this->user_model->simpan(); 
        $this->session->set_flashdata('alert','
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
        Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        $this->load->view('reg');
    }
    public function reg(){
        $this->load->view('reg');
    }

}
