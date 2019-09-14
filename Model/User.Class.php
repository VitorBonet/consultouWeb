<?php
class User {

    private $id;
    private $name;
    private $email;
    private $telephone;
    private $telephoneCell;
    private $password;
    private $dateAdd;
    private $language;
    private $country;
    private $status;
    private $type;
    private $lastAccess;
    private $accessNumber;
    
    function __construct() {
        define("USER_TABLENAME", "WEG_USER_USE");
        define("USER_ID", "USE_ID");
        define("USER_NAME", "USE_NAME");
        define("USER_EMAIL", "USE_EMAIL");
        define("USER_TELEPHONE", "USE_TELEPHONE");
        define("USER_TELEPHONE_CELL", "USE_TELEPHONE_CELL");
        define("USER_PASSWORD", "USE_PASSWORD");
        define("USER_DATE_ADD", "USE_DATE_ADD");
        define("USER_LANGUAGE", "USE_LANGUAGE"); 
        define("USER_COUNTRY", "USE_COUNTRY"); 
        define("USER_STATUS", "USE_STATUS"); 
        define("USER_TYPE", "USE_TYPE"); 
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
    function getTelephone() {
        return $this->telephone;
    }
    function getTelephoneCell() {
        return $this->telephoneCell;
    }
    function getPassword() {
        return $this->password;
    }
    function getDateAdd() {
        return $this->dateAdd;
    }
    function getLanguage() {
        return $this->language;
    }
    function getCountry() {
        return $this->country;
    }
    function getStatus() {
        return $this->status;
    }
    function getType() {
        return $this->type;
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
    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
    function setTelephoneCell($telephoneCell) {
        $this->telephoneCell = $telephoneCell;
    }
    function setPassword($password) {
        $this->password = $password;
    }
    function setDateAdd($dateAdd) {
        $this->dateAdd = $dateAdd;
    }
    function setLanguage($language) {
        $this->language = $language;
    }
    function setCountry($country) {
        $this->country = $country;
    }
    function setStatus($status) {
        $this->status = $status;
    }
    function setType($type) {
        $this->type = $type;
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
        $this->setTelephone($dados[USER_TELEPHONE]);
        $this->setTelephoneCell($dados[USER_TELEPHONE_CELL]);
        $this->setPassword($dados[USER_PASSWORD]);
        $this->setDateAdd($dados[USER_DATE_ADD]);
        $this->setLanguage($dados[USER_LANGUAGE]);
        $this->setCountry($dados[USER_COUNTRY]);
        $this->setStatus($dados[USER_STATUS]);
        $this->setType($dados[USER_TYPE]);
        $this->setLastAccess($dados[USER_LAST_ACCESS]);
        $this->setAccessNumber($dados[USER_ACCESS_NUMBER]);
    }
}