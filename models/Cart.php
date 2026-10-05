<?php
    class Cart{
        private $cart_id;
        private $user_id;
        private $created_at;
        private $updated_at;

        public function __construct($cart_id, $user_id, $created_at, $updated_at){
            $this->cart_id = $cart_id;
            $this->user_id = $user_id;
            $this->created_at = $created_at;
            $this->updated_at = $updated_at;
        }

        public function getCartId(){
            return $this->cart_id;
        }

        public function setCartId($cart_id){
            $this->cart_id = $cart_id;
        }

        public function getUserId(){
            return $this->user_id;
        }

        public function setUserId($user_id){
            $this->user_id = $user_id;
        }

        public function getCreatedAt(){
            return $this->created_at;
        }

        public function setCreatedAt($created_at){
            $this->created_at = $created_at;
        }

        public function getUpdatedAt(){
            return $this->updated_at;
        }

        public function setUpdatedAt($updated_at){
            $this->updated_at = $updated_at;
        }
    }