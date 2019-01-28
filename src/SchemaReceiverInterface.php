<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

interface SchemaReceiverInterface
{
    /**
     * @param BuilderInterface $builder
     * @param array $options
     * @return SchemaInterface
     */
    public function receiveSchema(BuilderInterface $builder, array $options = []): SchemaInterface;
}
