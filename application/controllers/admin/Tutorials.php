<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutorials extends CI_Controller
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
        $data['tutorials'] = get_all_data('tutorials');
        $this->load->view('admin/tutorials', $data);
    }
    public function status()
    {

        update_data('tutorials', array('status' => $this->input->post('status')), array('tutorials_id' => $this->input->post('tutorials_id')));

        redirect(base_url('admin/tutorials'));
    }


    public function enroll_tutorials()
    {
        $data['header'] = $this->load->view('admin/header', '', TRUE);
        $data['footer'] = $this->load->view('admin/footer', '', TRUE);
        $data['sidebar'] = $this->load->view('admin/sidebar', '', TRUE);
        $data['all_enrolls'] = get_all_data('tutorials_enrollment');
        $this->load->view('admin/enroll_tutorials', $data);
    }

}
