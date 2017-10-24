<?php  namespace Modelos;

	class User{
		private $email;
		private $password;
		private $id;
		
		public function __construct($nombre, $password,$email)
		{
			$this->nombre = $nombre;
			$this->password = $password;
			$this->email = $email;
			$this->id = 0;
		}
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
	}
?>