<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

interface SubSchemaReceiverInterface
{
    public function receiveSchema(string $name, BuilderInterface $builder, array $options = []): SchemaInterface;
}
