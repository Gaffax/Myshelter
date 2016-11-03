<?php
namespace MyLib;


class MyClass{
  private $name;
  public function __construct()
  {
    $this->setName("mads");
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function getName():string//:string optional
  {
    return $this->name;
  }
}

?>
