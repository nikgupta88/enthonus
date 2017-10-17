<?php
class Insert_model extends CI_Model{
		
		function update($data){

		$this->db->set('content', $data['name']);
		$this->db->set('text1', $data['name1']);
		$this->db->where('id', $data['id']);
		$this->db->update('manage');


			}

		function select($data)
		{

			$this->db->select('content, text1');
			$text = $this->db->get_where('manage', array('id' => $data['id']));
			return($text);

		}

		function check($data)
			{


				$x=$data['user'];

				$y=$data['pass'];
				$this->db->select('username');
				$text = $this->db->get_where('create_an_account', array('username' => $x,'password'=>$y));
				//$text = $this->db->query("SELECT username FROM create_an_account where username='$x' and password='$y'");
				//$row = $text->row();

				return($text);



				}

		function insert($data)
		{

				


			$this->db->query("INSERT INTO create_an_account (name,email,username,mobilenumber,city,pincode,address,password) VALUES('$data[user_name]','$data[user_email]','$data[user_username]','$data[user_mobilenumber]','$data[user_password]','$data[user_dropdown]','$data[user_pincode]','$data[user_addre]')" );
			
		}
		function mobile($data)
		{

			$this->db->select('mobilenumber');
			$text = $this->db->get_where('create_an_account', array('mobilenumber' => $data['name1']));
			return($text);



		}

		function em($data)
		{

			$this->db->select('email');
			$text = $this->db->get_where('create_an_account', array('email' => $data['name1']));
			return($text);



		}



			
		}

?>