<?php

namespace Utopia\Tests\Storage\Device;

use Utopia\Storage\Device\Contabo;
use Utopia\Tests\Storage\S3Base;

class ContaboTest extends S3Base
{
    protected function init(): void
    {
        $this->root = '';
        $key = $_SERVER['WASABI_ACCESS_KEY'] ?? '';
        $secret = $_SERVER['WASABI_SECRET'] ?? '';
        $bucket = 'utopia-storage-tests';

        $this->object = new Contabo($this->root, $key, $secret, $bucket, "default", "");
    }

    protected function getAdapterName(): string
    {
        return 'Contabo Storage';
    }

    protected function getAdapterType(): string
    {
        return $this->object->getType();
    }

    protected function getAdapterDescription(): string
    {
        return 'Contabo Storage';
    }
}
