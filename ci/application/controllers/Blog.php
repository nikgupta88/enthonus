<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	public function index()
	{
		$this->load->view('home');
		


	}
	public function home()
	{
		$data = array(
			'id'=>1,
			
			);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->select($data);
		//$text=$this->db->query("SELECT content,text1  FROM manage where id=1");
		$data['records'] =$text->result();
		if(isset($_GET['status']) && $_GET['status'] == 'success')
		{
			$x = array('id' => 0 );
		}
		else
		{
			$x = array('id' => 1 );
		}
		$this->load->view('home',$x);
			

		$this->load->view('last',$data);


	}
	public function aboutus()
	{
		$data = array(
			'id'=>2,
			
			);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->select($data);
		//$text=$this->db->query("SELECT content,text1  FROM manage where id=1");
		$data['records'] =$text->result();
		
			
		
		$this->load->view('aboutus');
		$this->load->view('last',$data);

	}
	public function contact()
	{
		$data = array(
			'id'=>3,
			
			);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->select($data);
		//$text=$this->db->query("SELECT content,text1  FROM manage where id=1");
		$data['records'] =$text->result();
		
		
			
		
		$this->load->view('contact');
		$this->load->view('last',$data);

	}
	public function abc()
	{
		$this->load->view('abc');

	}
	public function db()
	{

		$data = array(

			'user_name'  =>    $this->input->post('name'),
			'user_email'	=>    $this->input->post('email'),
			'user_username'	=>$this->input->post('username'),
			'user_mobilenumber'	=>$this->input->post('mobilenumber'),
			'user_password'	=>$this->input->post('dropdown'),
			'user_dropdown'	=>$this->input->post('pincode'),
			'user_pincode'	=>$this->input->post('addre'),
			'user_addre'	=>$this->input->post('password'),
			
			
			);
		$x = array('name' => $data['user_name'], );
		//echo $data['user_name'];
		$this->session->set_userdata($x);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->insert($data);
		
		$this->load->view('loginhome');

	
		

	}


	public function loginhome()
	{
		$data = array(
			'id'=>1,
			
			);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->select($data);
		//$text=$this->db->query("SELECT content,text1  FROM manage where id=1");
		$data['records'] =$text->result();
		

		

		
		$this->load->view('loginhome');
		$this->load->view('last',$data);


	}
	public function loginaboutus()
	{
		$data = array(
			'id'=>2,
			
			);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->select($data);
		//$text=$this->db->query("SELECT content,text1  FROM manage where id=1");
		$data['records'] =$text->result();
		
			
		
		
		
		$this->load->view('loginaboutus');
		$this->load->view('last',$data);



	}
	public function logincontact()
	{

		$data = array(
			'id'=>3,
			
			);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->select($data);
		//$text=$this->db->query("SELECT content,text1  FROM manage where id=1");
		$data['records'] =$text->result();
		$this->load->view('logincontact');
		$this->load->view('last',$data);


	}
	
	public function select()
	{
		
		$data = array(

			'user'  =>    $this->input->post('user'),
			'pass'	=>    $this->input->post('pass'),
			
			
			
			);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->check($data);
		$row = $text->row();
		if($row = $text->row())
		{

					$x = array('name' => $row->username, );
					$this->session->set_userdata($x);
					//echo "yes";
					header("Location:loginhome");
					


		}
		else
			{
				//echo "no";
				//header("Location:home");
				header("Location:home?status=success");
			}
		

		/*$x=$this->input->post('user');
		$y=$this->input->post('pass');
		$text = $this->db->query("SELECT username FROM create_an_account where username='$x' and password='$y'");
		if($row = $text->row())
		{

					$x = array('name' => $row->username, );
					$this->session->set_userdata($x);
					//echo "yes";
					header("Location:loginhome");
					


		}
		else
			{
				//echo "no";
				//header("Location:home");
				header("Location:home?status=success");
			}

		*/
		//$this->load->model('Insert_model');
		//$text=$this->Insert_model->check($data);




	}

	public function manage()
	{
		
		$this->load->view('manage');


	}
	public function manageabout()
	{
		$this->load->view('manageabout');


	}
	public function managecontact()
	{
		$this->load->view('managecontact');


	}
	public function update()
	{
		
			$data = array(

			//$name =$_FILES["x"]["name"];
			//$name1 =$_POST["y"];
			'name' => $_FILES["x"]["name"],
			'name1' => $this->input->post('y'),
			'id'=>1,
			
			);

		
		/*$this->db->set('content', $data['name']);
		$this->db->set('text1', $data['name1']);
		$this->db->where('id', 1);
		$this->db->update('manage');*/
		//$this->db->query("UPDATE manage set content='$data[name]',text1='$data[name1]' where id=1");

		 $this->load->model('Insert_model');
		$this->Insert_model->update($data);

		$this->load->view('manage');


	}
	public function updateabout()
	{
		$data = array(

			//$name =$_FILES["x"]["name"];
			//$name1 =$_POST["y"];
			'name' => $_FILES["x"]["name"],
			'name1' => $this->input->post('y'),
			'id'=>2,
			
			);
		
		/*$this->db->set('content', $data['name']);
		$this->db->set('text1', $data['name1']);
		$this->db->where('id', 1);
		$this->db->update('manage');*/
		//$this->db->query("UPDATE manage set content='$data[name]',text1='$data[name1]' where id=1");

		 $this->load->model('Insert_model');
		$this->Insert_model->update($data);


		$this->load->view('manageabout');


	}
	public function updatecontact()
	{
		$data = array(

			//$name =$_FILES["x"]["name"];
			//$name1 =$_POST["y"];
			'name' => $_FILES["x"]["name"],
			'name1' => $this->input->post('y'),
			'id'=>3,
			
			);
		
		/*$this->db->set('content', $data['name']);
		$this->db->set('text1', $data['name1']);
		$this->db->where('id', 1);
		$this->db->update('manage');*/
		//$this->db->query("UPDATE manage set content='$data[name]',text1='$data[name1]' where id=1");

		 $this->load->model('Insert_model');
		$this->Insert_model->update($data);

		$this->load->view('managecontact');


	}

	public function text()
	{
		$data = array(

			'name1' => $this->input->post('name1'),
		
			);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->mobile($data);
		if($row = $text->row())
		{

					
					echo "1 ";
					//header("Location:loginhome");
					


		}
		else
			{
				echo "2";
				//header("Location:home");
				//header("Location:home?status=success");
			}

	}


	public function emck()
	{
		$data = array(

			'name1' => $this->input->post('name1'),
		
			);
		$this->load->model('Insert_model');
		$text=$this->Insert_model->em($data);
		if($row = $text->row())
		{

					
					echo "1 ";
					//header("Location:loginhome");
					


		}
		else
			{
				echo "2";
				//header("Location:home");
				//header("Location:home?status=success");
			}

	}
	

	

}
