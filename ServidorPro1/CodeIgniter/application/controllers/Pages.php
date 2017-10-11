<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pages extends CI_Controller{
    
public function view($page = 'home')
{
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        
        //$data['title'] = "Hola es una prueba";
        //$data['title2'] = ucfirst($page); // Capitalize the first letter

        $data = array(
            "titulo" => "hola es una prueba",
            "title" => ucfirst($page)
            
        );
            
            
        
        
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}
}