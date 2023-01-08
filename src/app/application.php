<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * MIT License
 *
*/

class application extends bravedave\application\application
{

  protected function getMatrix()
  {

    $dao = new property;
    return $dao->getMatrix();
  }

  public function __invoke()
  {

    $dao = new property;
    $dto = $dao->getByID(1);

    print_r($dto);

    printf("Street : %s\n", $dto->address);

    $matrix = $this->getMatrix();
  }
}
