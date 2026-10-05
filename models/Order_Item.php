<?php
    class Order_Item{
        private $order_item_id;
        private $order_id;
        private $product_id;
        private $quantity;
        private $unit_price;

        public function __construct($order_item_id, $order_id, $product_id, $quantity, $unit_price){
            $this->order_item_id = $order_item_id;
            $this->order_id = $order_id;
            $this->product_id = $product_id;
            $this->quantity = $quantity;
            $this->unit_price = $unit_price;
        }

        public function getOrderItemId(){
            return $this->order_item_id;
        }

        public function setOrderItemId($order_item_id){
            $this->order_item_id = $order_item_id;
        }

        public function getOrderId(){
            return $this->order_id;
        }

        public function setOrderId($order_id){
            $this->order_id = $order_id;
        }

        public function getProductId(){
            return $this->product_id;
        }

        public function setProductId($product_id){
            $this->product_id = $product_id;
        }

        public function getQuantity(){
            return $this->quantity;
        }

        public function setQuantity($quantity){
            $this->quantity = $quantity;
        }

        public function getUnitPrice(){
            return $this->unit_price;
        }

        public function setUnitPrice($unit_price){
            $this->unit_price = $unit_price;
        }
    }