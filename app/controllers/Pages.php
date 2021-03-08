<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
	/**
	 * Class Pages
	 * Gère les pages statiques
	 */
	class Pages extends Controller {
        private $postModel;

		/**
		 * Pages constructor.
		 */

        public function __construct() {
            $this->postModel = $this->loadModel('Article');
        }
		
		/**
		 * Page Accueil
		 */
		public function index() {
            $posts = $this->postModel->findAllPosts('');

			$data = [
				'articles' => $posts
			];
			
			$this->render('index', $data);
		}
		
		/**
		 * Page About
		 */
		public function about() {
			$data = [
				'title' => 'About me'
			];
			$this->render('pages/about', $data);
		}
	}
