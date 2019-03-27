<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

use Ixocreate\Schema\Elements\GroupElement;

interface BuilderInterface
{
    /**
     * @param string $element
     * @param string $name
     * @return ElementInterface
     */
    public function create(string $element, string $name): ElementInterface;

    /**
     * @param string $element
     * @return ElementInterface
     */
    public function get(string $element): ElementInterface;

    /**
     * @param string $name
     * @param string $class
     * @return GroupInterface
     */
    public function group(string $name, string $class = GroupElement::class): GroupInterface;
}
