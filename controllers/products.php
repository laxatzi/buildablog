<?php
  class Products {
      public function index()
      {
          require 'models/Product.php';
          $product = new Product();
          $products = $product->getAllProducts();

          require 'view.php';

  }

}

?>