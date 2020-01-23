<?php


class Posts extends Controller
{

  /**
   * Posts constructor.
   */
  public function __construct()
  {
    $this->postModel = $this->model('Post');
  }

  public function index(){
    $posts = $this->postModel->getPosts();
    $data = array(
      'title' => 'Welcome to Posts',
      'content' => 'Posts view is loaded',
      'posts' => $posts
    );
    $this->view('posts/index', $data);
  }

  public function add(){
    $this->postModel->addPost();
  }
}