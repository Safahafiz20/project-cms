<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caraousel extends CI_Controller {
    public function __construct(){
        parent::__construct();
     
    }
    
    public function index(){
        $this->db->from('caraousel');
        $caraousel  = $this->db->get()->result_array();
        $data = array(           
            'judul_halaman' => 'halaman caraousel', 
            'caraousel'      => $caraousel,
           
        );
        $this->template->load('template_admin', 'admin/caraousel_index',$data);
    }
       
    public function simpan(){
        $namafoto = date("YmHis") . '.jpg';
        $config['upload_path']      = 'assets/upload/caraousel/';
        $config['max_size'] = 60 * 1024 * 1024;
        $config['allowed_types'] = '*';
        $config['file_name']        = $namafoto;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 60 * 1024 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/caraousel');
        } elseif (! $this->upload->do_upload('foto')) {
            $error      = array('error' => $this->upload->display_errors());
        } else {
            $data = array('uppload_data' => $this->upload->data());
        }
     
        $data = array(
            'judul'      => $this->input->post('judul'), 
            'foto'      => $namafoto,
        );

        $this->db->insert('caraousel', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Caraousel Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/caraousel');  
    }
   
    public function delete($id){
        $filename=FCPATH.'assets/upload/caraousel/'.$id;
            if (file_exists($filename)){
                 unlink("assets/upload/caraousel/".$id);
            }
        $where = array (
            'foto' => $id
        );
        $this->db->delete('caraousel', $where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
        berhasil menghapus caraousel
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/caraousel');

    }
    

   
}

