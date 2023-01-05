<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * MIT License
 *
*/

class property extends bravedave\application\dao {

  protected $dto = __NAMESPACE__ . '\dto\property';

  function getByID($id): dto\property {

    $dto = parent::getByID($id);
    $dto->address = 'What Street';

    return $dto;
  }
}
