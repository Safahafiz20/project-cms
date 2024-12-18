<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model'); 
        if($this->session->userdata('level')<>'admin'){
            redirect('auth');
        }
    }
    
    public function index(){
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data pengguna',  // Correctly placed comma
            'user'         => $user
        );
        $this->template->load('template_admin', 'admin/user_index', $data);
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
        redirect('admin/user');
    }
    public function delete($id){
        $where = array (
            'id_user' => $id
        );
        $this->db->delete('user', $where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
        berhasil menghapus user
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/user');

    }
    public function edit($id){
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id);
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
        $this->template->load('template_admin','admin/user_edit', $data);  
    }

    public function update(){
        $this->user_model->update();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i> Data Berhasil Diupdate!!!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/user');
    }
}

