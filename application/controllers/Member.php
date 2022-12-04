<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model', 'member');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['members'] = $this->member->getAll();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('member/index', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('full_name', 'Full_name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('born_place', 'Born_place', 'required');
        $this->form_validation->set_rules('born_date', 'Born_date', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('nationality', 'Nationality', 'required');
        $this->form_validation->set_rules('is_active', 'Is_active', 'required');

        if ($this->form_validation->run() == true) {

            $data = [
                'nik' => $this->input->post('nik'),
                'full_name' => $this->input->post('full_name'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'born_place' => $this->input->post('born_place'),
                'born_date' => $this->input->post('born_date'),
                'gender' => $this->input->post('gender'),
                'country' => $this->input->post('country'),
                'nationality' => $this->input->post('nationality'),
                'is_active' => $this->input->post('is_active')

            ];

            $this->member->insert($data);
            redirect('member');
        } else {
            $this->load->view('template/header');
            $this->load->view('member/add');
            $this->load->view('template/footer');
        }
    }

    public function edit($id)
    {
        $data['members'] = $this->member->findById($id);
        $this->load->view('template/header');
        $this->load->view('member/edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('full_name', 'Full_name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('born_place', 'Born_place', 'required');
        $this->form_validation->set_rules('born_date', 'Born_date', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('nationality', 'Nationality', 'required');
        $this->form_validation->set_rules('is_active', 'Is_active', 'required');

        if ($this->form_validation->run() == true) {
            $data = [
                'nik' => $this->input->post('nik'),
                'full_name' => $this->input->post('full_name'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'born_place' => $this->input->post('born_place'),
                'born_date' => $this->input->post('born_date'),
                'gender' => $this->input->post('gender'),
                'country' => $this->input->post('country'),
                'nationality' => $this->input->post('nationality'),
                'is_active' => $this->input->post('is_active')

            ];

            $id = $this->input->post('id');

                $this->member->update($data, $id);
                redirect('member');
            }
         else {
            $id = $this->input->post('id');
            $data['members'] = $this ->member->findById($id);
            $this->load->view('template/header');
            $this->load->view('member/edit', $data);
            $this->load->view('template/footer');
        }
    }

    public function delete($id)
    {
        $this->member->delete($id);
        return redirect('member');
    }
}
