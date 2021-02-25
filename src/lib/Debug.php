<?php
	/**
	 * Class Debug
	 */
	class Debug {
		/**
		 * @var array $data
		 */
		static public $data = array();
		
		/**
		 * @param $value
		 * @param null $key
		 */
		static public function add($value, $key = null) {
			if ($key)
				Debug::$data[$key] = $value;
			else
				Debug::$data[] = $value;
		}
	}