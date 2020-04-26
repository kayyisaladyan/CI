<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
  }

  public function register()
  {
    $data['title'] = 'register';
    $this->load->view('layouts/header');
    $this->load->view('home/auth');
    $this->load->view('layouts/footer');
  }

  public function proses_login() {
  	$this->form_validation->set_rules('username','Username','required|min_length[4]');
  	$this->form_validation->set_rules('password','Password','required');

  	if($this->form_validation->run()==FALSE){
  		redirect(base_url());;
  	} else {
  		$username = $this->input->post('username',true);
  		$password = $this->input->post('password',true);
  		$data = array(
  				'username' => $username,
  				'password' => md5($password)
        );

  		$cek_user = $this->Auth_model->login($data);
  		if ($cek_user->num_rows() > 0) {
  			$this->session->set_userdata($cek_user->row_array());
  			redirect(base_url());
  		} else {
  			$this->session->set_flashdata('status','Username atau Password tidak ditemukan');
  			redirect(base_url());
  		}
  	}
  }

  public function proses_register()
    {
      $this->form_validation->set_rules('username','Username','required|trim|is_unique[user.username]',[
          'is_unique' => 'Username telah dipakai!'
      ]);
      $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
          'matches' => 'Password tidak sesuai!',
          'min_length' => 'Password terlalu pendek!'
      ]);
      $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
      $this->form_validation->set_rules('nama','Nama Lengkap','required');
      $this->form_validation->set_rules('email','Email','required');
      $this->form_validation->set_rules('no_telepon','No Telepon','required');

      if ($this->form_validation->run() == FALSE) {
        $this->index();
      }else {
        $id_user    = $this->Auth_model->id_user();
        $nama       = $this->input->post('nama',true);
        $username   = $this->input->post('username',true);
        $password   = $this->input->post('password1',true);
        $email      = $this->input->post('email',true);
        $no_telepon = $this->input->post('no_telepon',true);

        $data = array(
                'id_user'   => $id_user,
                'username'  => $username,
                'nama'      => $nama,
                'password'  => md5($password),
                'email'     => $email,
                'no_telepon'=> $no_telepon
            );

        $result = $this->Auth_model->register($data);
        if ($result) {
          redirect(base_url());
        }else {
          redirect(base_url());
        }
      }
    }


  public function logout(){
  	$this->session->sess_destroy();
  	redirect(base_url(''));
  }

}
