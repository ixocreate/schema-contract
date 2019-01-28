<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

use Ixocreate\Contract\ServiceManager\NamedServiceInterface;

interface AdditionalSchemaInterface extends NamedServiceInterface
{
    /**
     * @param BuilderInterface $builder
     * @return SchemaInterface
     */
    public function additionalSchema(BuilderInterface $builder): SchemaInterface;
}
