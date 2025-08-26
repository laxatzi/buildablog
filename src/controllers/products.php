<?php
  class Products {
      public function index()
      {
          require 'src/models/Product.php';
          $product = new Product();
          $products = $product->getAllProducts();

          require 'views/products_index.php';

  }

}

?>