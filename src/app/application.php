<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * MIT License
 *
*/

class application extends bravedave\application\application {

  public function __invoke() {

    $dao = new property;
    $dto = $dao->getByID(1);

    print_r($dto);

    printf("Street : %s\n", $dto->address);
  }
}

