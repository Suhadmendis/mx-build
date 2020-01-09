<?php
class Pages extends CI_Controller {
		public function index()
		{
			// $this->home();
			$this->view();
		}

		public function home()
		{

			$this->load->model('Model_user');

			$data['title'] = 'MVC cool Title';
			$data['page_header'] = 'Intro to MVC Design';
			$data['firstnames'] = $this->Model_user->getFirstNames();

			$data['users'] = $this->Model_user->getusers();

			$this->load->view('welcome_message', $data);
		}


        public function view($page = 'home')
        {
        	if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	        {
	                // Whoops, we don't have a page for that!
	                show_404();
	        }

	        $data['title'] = ucfirst($page); // Capitalize the first letter

	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/'.$page, $data);
	        $this->load->view('templates/footer', $data);
        }
}