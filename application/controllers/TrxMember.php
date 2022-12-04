<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TrxMember extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('TrxMember_model', 'trxmember');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['member_trxs'] = $this->trxmember->getAll();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('transaksi/member/index', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('is_active', 'Is_active', 'required');

        if ($this->form_validation->run() == true) {

            $data = [
                'title' => $this->input->post('title'),
                'month' => $this->input->post('month'),
                'price' => $this->input->post('price'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->sub->insert($data);
            redirect('subs');
        } else {
            $this->load->view('template/header');
            $this->load->view('sub/add');
            $this->load->view('template/footer');
        }
    }

    public function edit($id)
    {
        $data['subscription'] = $this->sub->findById($id);
        $this->load->view('template/header');
        $this->load->view('sub/edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('is_active', 'Is_active', 'required');


        if ($this->form_validation->run() == true) {
            $data = [
                'title' => $this->input->post('title'),
                'month' => $this->input->post('month'),
                'price' => $this->input->post('price'),
                'is_active' => $this->input->post('is_active')
            ];

            $id = $this->input->post('id');

                $this->sub->update($data, $id);
                redirect('subs');
            }
         else {
            $id = $this->input->post('id');
            $data['subscription'] = $this ->sub->findById($id);
            $this->load->view('template/header');
            $this->load->view('sub/edit', $data);
            $this->load->view('template/footer');
        }
    }

    public function delete($id)
    {
        $this->sub->delete($id);
        return redirect('subs');
    }
}
