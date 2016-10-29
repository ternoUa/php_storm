<?php

/**
 * Created by PhpStorm.
 * User: work
 * Date: 29.10.2016
 * Time: 20:11
 */
abstract class Animal
{
  protected $color;
  protected $name;

  /**
   * @return void
   */
  public function showName()
  {
    echo $this->name;
  }

  /**
   * @return void
   */
  abstract public function voice();
}