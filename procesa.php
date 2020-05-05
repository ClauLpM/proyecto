<?php
//creacion de una clase en php
class Procesa{
	//declaramos atributos
	private $_nombre;
	private $_email;

	//declaracion de constructor
	public function __construct(){

	}

	public function getNombre(){
		return $this->_nombre;

	}

	public function setNombre($nombre){
		$this->_nombre = $nombre;
	}

	public function getEmail(){
		return $this->_email;
	}

	public function setEmail($email){
		$this->_email = $email;
	}
}