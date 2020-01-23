<?php


class Post
{
  private $db;

  /**
   * Post constructor.
   */
  public function __construct(){
    $this->db = new Database();
  }

  public function getPosts(){
    $this->db->query('SELECT * FROM posts');
    return $this->db->getAll();
  }

  public function addPost(){
    $this->db->query('INSERT INTO posts SET title=:title, content=:content');
    $this->db->bind('title', 'Next Post');
    $this->db->bind('content', 'Next Post Content');
    $this->db->execute();
  }

}