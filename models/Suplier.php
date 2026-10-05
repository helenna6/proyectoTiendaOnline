<?php
    class Supplier{
        private $supplier_id;
        private $name;
        private $contact_person;
        private $phone;
        private $email;

        public function __construct($supplier_id, $name, $contact_person, $phone, $email){
            $this->supplier_id = $supplier_id;
            $this->name = $name;
            $this->contact_person = $contact_person;
            $this->phone = $phone;
            $this->email = $email;
        }

        public function getSupplierId(){
            return $this->supplier_id;
        }

        public function setSupplierId($supplier_id){
            $this->supplier_id = $supplier_id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getContactPerson(){
            return $this->contact_person;
        }

        public function setContactPerson($contact_person){
            $this->contact_person = $contact_person;
        }

        public function getPhone(){
            return $this->phone;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }
    }