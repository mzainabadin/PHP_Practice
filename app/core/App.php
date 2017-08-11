<?php

protected $controller = 'home';

protected $method = 'index';
protected $params = [];

class App
{
  public function _construct()
  {
    $url = $this->parseUrl();
    if(file_exists('../app/controllers/' . url[0] . 'php'))
    {
      $this->controller = url[0];
    }
  }
  public function parseUrl()
  {
    if(isset($_GET['url']))
    {
     return $url =  explode('/', filter_var(trim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
  }

}

 ?>
