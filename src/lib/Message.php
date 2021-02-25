<?php
	
	/**
	 * Class Message
	 */
	class Message {
		/**
		 * @param $text
		 * @param string $class
		 * @param int $duration
		 */
		public static function add($text, $class = 'success', $duration = 0) {
			$allMessages = self::getAll();

			$now = time();

			array_push($allMessages, array('text' => $text, 'class' => $class, 'time' => $now, 'duration' => $duration));

			Session::set('allMessages', $allMessages);
		}
		
		/**
		 * @return array|mixed
		 */
		public static function getAll() {
			return (Session::get('allMessages')) ? Session::get('allMessages')  : array();
		}
		
		/**
		 * @param $index
		 */
		public static function remove($index) {
			$allMessages = self::getAll();
			
			unset($allMessages[$index]);

			Session::set('allMessages', $allMessages);
		}
	}