<?php 

  class User {
    private $name;
    public function __construct($name) {
      $this->name = $name;
    }
    public function setName($name) {
      $this->name = $name;
    }
    public function getName() {
      return $this->name;
    }
  }

  # 1
  $user1 = new User('Elizabeth McCord');
  echo $user1->getName();
  echo "<br>";

  # 2
  $user2 = new User('Alison McCord');
  echo $user2->getName();

?>