<?php


class Posts extends Controller
{

  /**
   * Posts constructor.
   */
  public function __construct()
  {
    echo 'Posts class loaded';
  }

  public function index(){
    $this->view('index');
  }
}