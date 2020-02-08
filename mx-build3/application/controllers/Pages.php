<?php
class Pages extends CI_Controller {
		public function index()
		{

			$this->load->model("main_model");
			$data["fetch_data"] = $this->main_model->fetch_data();
			$this->load->view("main_view", $data);
			// $this->home();
			// $this->view();
			// $this->load->model("main_model");
			// $data["title"] = "Suhad";
			// $data["test1"] = "test";
			// 
			// echo $this->main_model->test_main();
		}
		public function form_validation()
		{
			
			$this->load->library("form_validation");
			$this->form_validation->set_rules("first_name","First Name", 'required|alpha');
			$this->form_validation->set_rules("last_name","Last Name", 'required|alpha');
			
			if ($this->form_validation->run()) {

				$this->load->model("main_model");
				$data = array(
					"first_name" => $this->input->post("first_name"),
					"last_name" => $this->input->post("last_name")
				);

				$this->main_model->insert_data($data);
				redirect(base_url() . "pages/inserted");

			}else{

				$this->index();

			}



		}
		public function inserted()
		{

			$this->index();
			
		}
		public function delete_data()
		{

			$id = $this->uri->segment(3);
			$this->load->model("main_model");
			$this->main_model->delete_data($id);
			redirect(base_url() . "pages/deleted");
			
		}
		public function deleted()
		{

			$this->index();
			
		}

		public function login()
		{

			$data['title'] = 'CodeIgniter Simple';
			$this->load->view("login", $data);
			
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