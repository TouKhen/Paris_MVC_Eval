<?php
	
	/**
	 * Class Session
	 */
	class Session {
		/**
		 * Start the session
		 */
		static public function start() {
			session_start();
		}
		
		/**
		 * @param $key
		 * @param $value
		 */
		static public function set($key, $value) {
			$_SESSION[$key] = $value;
		}
		
		/**
		 * @param $key
		 * @return mixed
		 */
		static public function get($key) {
			if (isset($_SESSION[$key]))
				return $_SESSION[$key];
		}
		
		/**
		 * @param $key
		 */
		static public function remove($key) {
			unset($_SESSION[$key]);
		}
	}