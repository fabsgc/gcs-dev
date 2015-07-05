<?php
	namespace Controller\Request\Plugin;

	/**
	 * @property \System\Form\Validation\Validation $validation
	*/

	trait captcha{
		public function captcha(){
			$this->validation->text('captcha', 'captcha')
				->equal('coucou', 'Le captcha ne correspond pas à l\'image');
		}
	}