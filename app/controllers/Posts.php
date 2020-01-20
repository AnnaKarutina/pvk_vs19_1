<?php


class Posts
{

  /**
   * Posts constructor.
   */
  public function __construct()
  {
    echo 'Posts class loaded';
  }

  public function about($id){
    echo 'about method is loaded<br>';
    echo 'post '.$id.' is printed<br>';
  }
}