<?php
 class Customer{
     private int $id;
     private string $firstName;
     private string $lastName;
     private string $email;

     public function __construct(int $id, string $firstName, string $lastName, string $email){
         $this->id = $id;
         $this->firstName = $firstName;
         $this->lastName = $lastName;
         $this->email = $email;
     }

     public function getId():int{
         return $this->id;
     }

     public function getFirstName():string{
         return $this->firstName;
     }

     public function getLastName():string{
         return $this->lastName;
     }

     public function getEmail():string {
         return $this->email;
     }
     public function setId($id){
         $this->id = $id;
     }

     public function setFirstName($firstName){
         $this->firstName = $firstName;
     }

     public function setEmail($email){
         $this->email = $email;
     }

 }

