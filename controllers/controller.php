<?php
  class Controller {
      public function index()
      {
          require 'model.php';
          $product = new Product();
          $products = $product->getAllProducts();

          require 'view.php';

  }

}

?>