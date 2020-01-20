<?php


class Pages extends Controller
{

  /**
   * Pages constructor.
   */
  public function __construct()
  {
    echo 'Pages class is loaded';
  }

  public function index(){
    echo 'index method is loaded<br>';
  }
}