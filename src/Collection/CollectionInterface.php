<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Entity\Collection;

interface CollectionInterface extends \Countable, \IteratorAggregate
{
    /**
     * Returns all collection items
     *
     * @return array
     */
    public function all(): array;

    /**
     * Returns all keys of the collection items
     *
     * @return array
     */
    public function keys(): array;

    /**
     * Executes a callable over each collection item
     *
     * @param callable $callable
     */
    public function each(callable $callable): void;

    /**
     * Checks if the current collection is empty
     *
     * @return bool
     */
    public function isEmpty(): bool;
}
