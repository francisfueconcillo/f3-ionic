<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index($f3) {

      $results = array(
        'api'=>'It works! Configure DB credentials in config.ini and enable DB in controller.php.'
      );

      $this->successOutput($results);
    }

}
