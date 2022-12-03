<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Librarian extends CI_Controller
{

   

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Librarian_model', 'librarian');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['librarians'] = $this->librarian->getAll();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('librarian/index', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('avatar', 'Avatar');

        if ($this->form_validation->run() == true) {

            $data = [
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ];

            $file_name = str_replace('.', '', $data['librarians']->id);
            $config['upload_path']          = FCPATH . '/upload/avatar/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['file_name']            = $file_name;
            $config['overwrite']            = true;
            $config['max_size']             = 1024; // 1MB
            $config['max_width']            = 1080;
            $config['max_height']           = 1080;

            
            $this -> load -> library('upload',$config);
            // 
            if(! $this->upload->do_upload('avatar')){
                $data['error'] = $this ->upload->display_errors();
                $this->session->set_flashdata('UpdateProfilePicError', $data['error']);
            }else{
                $uploaded_data = $this ->upload -> data();
                $new_data =[
                    'avatar' => $uploaded_data['file_name']
                ];

                $myData = array_merge($data,$new_data);

                $this->librarian->insert($myData);
                redirect('librarian');
               
            }
            
            
            
        } else {
            $this->load->view('template/header');
            $this->load->view('librarian/add');
            $this->load->view('template/footer');
        }
    }

    public function edit($id){
        $data['librarians'] = $this -> librarian->findById($id);    
        $this->load->view('template/header');
        $this->load->view('librarian/edit', $data);
		$this->load->view('template/footer');
    }

    public function update()
    {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('avatar', 'Avatar');

        if ($this->form_validation->run()==true)
        {   
            $data = [
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ];

            $id = $this->input->post('id');

			// $file_name = str_replace('.', '', $id);
            $config['upload_path']          = FCPATH . '/upload/avatar/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            // $config['file_name']            = $file_name;
            $config['overwrite']            = true;
            $config['max_size']             = 1024; // 1MB
            $config['max_width']            = 1080;
            $config['max_height']           = 1080;

            $this -> load -> library('upload',$config);

            if(! $this->upload->do_upload('avatar')){
                $data['error'] = $this ->upload->display_errors();
                $this->session->set_flashdata('UpdateProfilePicError', $data['error']);
            }else{
                $uploaded_data = $this ->upload -> data();
                $new_data =[
                    'avatar' => $uploaded_data['file_name']
                ];

                $myData = array_merge($data,$new_data);

                $this->librarian->update($myData, $id);
                redirect('librarian');
                
               
            }
           
            
		}
		else
		{
			$id = $this->input->post('id');
			$data['librarians'] = $this->librarian->findById($id);
			$this->load->view('template/header');
            $this->load->view('librarian/edit', $data);
			$this->load->view('template/footer');
		}
    }

    public function delete($id)
    {
        $this->librarian->delete($id);
        return redirect('librarian');
    }
}
