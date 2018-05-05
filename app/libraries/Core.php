<?php 

  # Creates URL and loads core controller
  # URL format = /controller/method/params

  class Core {

    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
      $url = $this->getUrl();
      # Look in controllers for first value
      # Remember we are actually in index.php now
      if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
        # Set as the controller
        $this->currentController = ucwords($url[0]);
        unset($url[0]);
      }
      require_once '../app/controllers/' . $this->currentController . '.php';
      $this->currentController = new $this->currentController;
    }

    public function getUrl() {
      if(isset($_GET['url'])) {
        $url = rtrim($_GET['url'],'/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
      }
    }

  }
