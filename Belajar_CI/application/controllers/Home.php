<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    //tambahkan parameter name pada index
    public function index($name='fulan')
    {
        $data['title']='Home';
        //$data adalah sebuah array dengan isi arraynya adalah name dan diisi $name.
        $data['name']=$name;
        $this->load->view('template/header',$data);
        //echo "Selamat datang di halaman home";
        $this->load->view('home/index');
        $this->load->view('template/footer');

    }

}

/* End of file Home.php */

?>