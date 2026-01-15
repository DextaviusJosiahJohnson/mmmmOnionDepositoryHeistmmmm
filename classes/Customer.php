<?php
class Customer {
    private $firstName;
    private $lastName;
    private $accounts; // i dont know what else to say these are all just for the customer objects

    public function __construct($firstName, $lastName, $accounts) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->accounts = $accounts;
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function getAccounts() {
        return $this->accounts;
    }
}
?>
