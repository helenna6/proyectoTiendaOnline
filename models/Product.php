<?php
    class Product{
        private $product_id;
        private $name;
        private $description;
        private $price;
        private $stock;
        private $supplier_id;
        private $category_id;
        private $image;

        public function __construct($product_id, $name, $description, $price, $stock, $supplier_id, $category_id, $image){
            $this->product_id = $product_id;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->stock = $stock;
            $this->supplier_id = $supplier_id;
            $this->category_id = $category_id;
            $this->image = $image;
        }

        public function getProductId(){
            return $this->product_id;
        }

        public function setProductId($product_id){
            $this->product_id = $product_id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getStock(){
            return $this->stock;
        }

        public function setStock($stock){
            $this->stock = $stock;
        }

        public function getSupplierId(){
            return $this->supplier_id;
        }

        public function setSupplierId($supplier_id){
            $this->supplier_id = $supplier_id;
        }

        public function getCategoryId(){
            return $this->category_id;
        }

        public function setCategoryId($category_id){
            $this->category_id = $category_id;
        }

        public function getImage(){
            return $this->image;
        }

        public function setImage($image){
            $this->image = $image;
        }
    }