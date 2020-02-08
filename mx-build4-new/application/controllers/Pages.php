<?php
class Pages extends CI_Controller {


		public function view($page = 'home')
        {
        	// if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	        // {
	        //         // Whoops, we don't have a page for that!
	        //         show_404();
	        // }

        }

        public function index($page = 'Test')
		{
			if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
		        {
		            show_404();
		        }else{
		        	$data['title'] = ucfirst($page);
		        	$this->load->view('templates/header', $data);
					$this->load->view('Test');
					$this->load->view('templates/footer', $data);
		        }
		}
		
}