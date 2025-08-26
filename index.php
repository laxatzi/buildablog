<?php

	require 'model.php';
	$model = new Model();
	$products = $model->getAllProducts();

	require 'view.php';


