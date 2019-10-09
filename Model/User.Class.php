<?php
class User {

    private $id;
    private $name;
    private $email;
    private $password;
    private $dateBirth;
    private $sex;
    private $dateCreated;
    private $lastAccess;
    private $accessNumber;
    
    function __construct() {
        define("USER_TABLENAME", "WEG_USER_USE");
        define("USER_ID", "USE_ID");
        define("USER_NAME", "USE_NAME");
        define("USER_EMAIL", "USE_EMAIL");
        define("USER_PASSWORD", "USE_PASSWORD");
        define("USER_DATE_BIRTH", "USE_DATE_BIRTH");
        define("USER_SEX", "USE_SEX");
        define("USER_DATE_CREATED", "USE_DATE_CREATED");
        define("USER_LAST_ACCESS", "USE_LAST_ACCESS"); 
        define("USER_ACCESS_NUMBER", "USE_ACCESS_NUMBER"); 
    }
    
    function getId() {
        return $this->id;
    }
    function getName() {
        return $this->name;
    }
    function getEmail() {
        return $this->email;
    }
    function getPassword() {
        return $this->password;
    }
    function getDateBirth() {
        return $this->dateBirth;
    }
    function getSex() {
        return $this->sex;
    }
    function getDateCreated() {
        return $this->dateCreated;
    }
    function getLastAccess() {
        return $this->lastAccess;
    }
    function getAccessNumber() {
        return $this->accessNumber;
    }

    
    function setId($id) {
        $this->id = $id;
    }
    function setName($name) {
        $this->name = $name;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function setPassword($password) {
        $this->password = $password;
    }
    function setDateBirth($dateBirth) {
        $this->dateBirth = $dateBirth;
    }
    function setSex($sex) {
        $this->sex = $sex;
    }
    function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;
    }
    function setLastAccess($lastAccess) {
        $this->lastAccess = $lastAccess;
    }
    function setAccessNumber($accessNumber) {
        $this->accessNumber = $accessNumber;
    }


    function alimentaObj($dados){
        $this->setId($dados[USER_ID]);
        $this->setName($dados[USER_NAME]);
        $this->setEmail($dados[USER_EMAIL]);
        $this->setPassword($dados[USER_PASSWORD]);
        $this->setDateBirth($dados[USER_DATE_BIRTH]);
        $this->setSex($dados[USER_SEX]);
        $this->setDateCreated($dados[USER_DATE_CREATED]);
        $this->setLastAccess($dados[USER_LAST_ACCESS]);
        $this->setAccessNumber($dados[USER_ACCESS_NUMBER]);
    }
}