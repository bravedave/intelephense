<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * MIT License
 *
*/

#[AllowDynamicProperties]
namespace bravedave\application;

class dao {

  protected $dto = __NAMESPACE__ . '\dto';

  function getByID($id): mixed {

    // do some data lookup

    if ($dto = new $this->dto) {

      return $dto;
    }

    return null;
  }
}
