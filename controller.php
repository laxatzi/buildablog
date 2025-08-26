<?php
  class Controller {
      public function index()
      {
          require 'model.php';
          $model = new Model();
          $products = $model->getAllProducts();

          require 'view.php';

  }

}

?>