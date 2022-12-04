<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model', 'book');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['books'] = $this->book->getAll();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('book/index', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('isbn', 'Isbn', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('synopsis', 'Synopsis', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('publisher', 'Publisher', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('language', 'Language', 'required');

        if ($this->form_validation->run() == true) {

            $data = [
                'isbn' => $this->input->post('isbn'),
                'title' => $this->input->post('title'),
                'synopsis' => $this->input->post('synopsis'),
                'author' => $this->input->post('author'),
                'publisher' => $this->input->post('publisher'),
                'category' => $this->input->post('category'),
                'language' => $this->input->post('language')
            ];

            $this->book->insert($data);
            redirect('book');
        } else {
            $this->load->view('template/header');
            $this->load->view('book/add');
            $this->load->view('template/footer');
        }
    }

    public function edit($id)
    {
        $data['books'] = $this->book->findById($id);
        $this->load->view('template/header');
        $this->load->view('book/edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {

        $this->form_validation->set_rules('isbn', 'Isbn', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('synopsis', 'Synopsis', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('publisher', 'Publisher', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('language', 'Language', 'required');

        if ($this->form_validation->run() == true) {
            $data = [
                'isbn' => $this->input->post('isbn'),
                'title' => $this->input->post('title'),
                'synopsis' => $this->input->post('synopsis'),
                'author' => $this->input->post('author'),
                'publisher' => $this->input->post('publisher'),
                'category' => $this->input->post('category'),
                'language' => $this->input->post('language'),
            ];

            $id = $this->input->post('id');

                $this->book->update($data, $id);
                redirect('book');
            }
         else {
            $id = $this->input->post('id');
            $data['books'] = $this ->book->findById($id);
            $this->load->view('template/header');
            $this->load->view('book/edit', $data);
            $this->load->view('template/footer');
        }
    }

    public function delete($id)
    {
        $this->book->delete($id);
        return redirect('book');
    }
}
