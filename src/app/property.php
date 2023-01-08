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
    $dto->id = 1;
    $dto->address = '22 What Street';

    return $dto;
  }

  static function getMatrix(): array {

    // some data operation

    return [
      (object)[
        'id' => 1,
        'street' => '22 What Street'
      ],
      (object)[
        'id' => 2,
        'street' => '24 What Street'
      ]
    ];
  }
}
