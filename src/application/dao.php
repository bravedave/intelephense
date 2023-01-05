<?php
/*
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * MIT License
 *
*/

namespace bravedave\application;

class dao {

  protected $dto = __NAMESPACE__ . '\dto';

  function getByID($id): dto {

    // do some data lookup

    if ($dto = new $this->dto) {

      return $dto;
    }

    return false;
  }
}
