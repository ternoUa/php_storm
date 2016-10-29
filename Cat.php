<?php

/**
 * Created by PhpStorm.
 * User: work
 * Date: 29.10.2016
 * Time: 20:12
 */
class Cat extends Animal
{
  public $color = 'black';

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function voice()
  {
    echo 'Miau)';
  }

  public function showName()
  {
    parent::showName();
    echo '^_^';
  }
}