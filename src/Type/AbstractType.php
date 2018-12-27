<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Entity\Type;

use Ixocreate\Contract\ServiceManager\NamedServiceInterface;
use Ixocreate\Contract\Type\TypeInterface;

abstract class AbstractType implements TypeInterface, NamedServiceInterface
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @param $value
     * @param array $options
     * @return TypeInterface
     */
    public function create($value, array $options = []): TypeInterface
    {
        $type = clone $this;
        $type->options = $options;
        $type->value = $type->transform($value);


        return $type;
    }

    /**
     * @param $value
     * @return mixed
     */
    protected function transform($value)
    {
        return $value;
    }

    /**
     * @return mixed
     * @deprecated
     */
    public function getValue()
    {
        return $this->value();
    }

    /**
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * @return array
     */
    public function options(): array
    {
        return $this->options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value();
    }

    public function __debugInfo()
    {
        return [
            'value' => (string) $this,
        ];
    }

    public function jsonSerialize()
    {
        return (string) $this;
    }
}
