<?php
/**
 * kiwi-suite/entity (https://github.com/kiwi-suite/entity)
 *
 * @package kiwi-suite/entity
 * @see https://github.com/kiwi-suite/entity
 * @copyright Copyright (c) 2010 - 2017 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);
namespace KiwiSuite\Entity\Entity;

use KiwiSuite\Entity\Collection\AbstractCollection;

class EntityCollection extends AbstractCollection
{
    public function __construct(array $items = [], $callbackKeys = null)
    {
        $items = (function (EntityInterface ...$entity) {
            return $entity;
        })(...$items);

        parent::__construct($items, $callbackKeys);
    }
}
