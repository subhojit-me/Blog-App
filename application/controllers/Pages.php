<?php
class Pages extends CI_Controller{
    public function view($page= 'home'){
        //pages/vies this methof is set to //default controller
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        $data['title'] = ucfirst($page);
        
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }
}