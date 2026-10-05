<?php   
//cargar modelos
require_once("models/Order.php");
require_once("models/OrderLine.php");
require_once("models/Product.php");
require_once("models/User.php");

//acciones

//listar productos
function listProducts(){
    $productRepository = new ProductRepository();
    $products = $productRepository->getAllProducts();
    require_once("views/listProducts.php");
}

//login

//logout

//register


//añadir al carrito

//terminar pedido

//vista por defecto


//cargar repositorios
require_once("repositories/OrderRepository.php");
require_once("repositories/OrderLineRepository.php");
require_once("repositories/ProductRepository.php");
require_once("repositories/UserRepository.php");


?>