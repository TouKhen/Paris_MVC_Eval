<?php
	/**
	 * Class Model
	 */
	class Model {
		/**
		 * @var Database $db
		 */
		protected $db;
	
		function __construct() {
			$this->db = new Database();
		}
	}