<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tuitions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('admin_id')) {
            redirect(base_url('admin/login'));
        }
    }

    public function index()
    {
        $data['header'] = $this->load->view('admin/header', '', TRUE);
        $data['footer'] = $this->load->view('admin/footer', '', TRUE);
        $data['sidebar'] = $this->load->view('admin/sidebar', '', TRUE);
        $data['all_tuitions']=get_all_data('teacher_enquery');
        $this->load->view('admin/all_tuitions', $data);
    }
}
