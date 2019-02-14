<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

/**
 * Interface SchemaReceiverInterface
 * @package Ixocreate\Contract\Schema
 * @deprecated
 */
interface SchemaReceiverInterface
{
    public function receiveSchema(BuilderInterface $builder, array $options = []): SchemaInterface;
}
