<?php


class Core
{
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = [];
  /**
   * Core constructor.
   */
  public function __construct()
  {
    $url = $this->getUrl();
    $controllerName = ucwords($url[0]);
    $controllerFile = '../app/controllers/'.$controllerName.'.php';
    if(file_exists($controllerFile)){
      $this->currentController = $controllerName;
      unset($url[0]);
    }
  }
  // get url data
  public function getUrl(){
    if(isset($_GET['url'])){
      $url = $_GET['url'];
      $url = rtrim($url, '/');
      $url = htmlentities($url);
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
}