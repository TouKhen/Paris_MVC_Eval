<?php


class Home extends Controller {


    # render all posts on the start page
    public function index() {
        $data = $this->model->getPosts();
        $t =  $this->model->getPostsTotal();

        $this->view->post = $data;
        $this->view->test = $t;
        $this->view->render('home/index');
			var_dump($this->view->test);
    }

}