<?php
	/*\
	 | ------------------------------------------------------
	 | @file : Exception.php
	 | @author : fab@c++
	 | @description : overriding of php exceptions
	 | @version : 3.0 Bêta
	 | ------------------------------------------------------
	\*/
	
	namespace System\Exception;

	class Exception extends \Exception{

		/**
		 * constructor
		 * @access public
		 * @param $message string
		 * @param $code int
		 * @param $previous Exception
		 * @since 3.0
		 * @package \System\Exception
		*/

		public function __construct ($message, $code = 0, Exception $previous = null){
			parent::__construct ($message, $code, $previous);
		}

		/**
		 * toString
		 * @access public
		 * @since 3.0
		 * @package \System\Exception
		*/

		public function __toString(){
			return $this->message;
		}

		/**
		 * @return string
		*/

		public function getType(){
			return ERROR_EXCEPTION;
		}

		/**
		 * destructor
		 * @access public
		 * @since 3.0
		 * @package system
		*/

		public function __destruct(){
		}
	}