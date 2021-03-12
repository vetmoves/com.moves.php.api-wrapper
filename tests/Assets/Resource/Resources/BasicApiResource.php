<?php

namespace Tests\Assets\Resource\Resources;

use Moves\ApiWrapper\Resource\Contracts\All as AllContract;
use Moves\ApiWrapper\Resource\Contracts\Create as CreateContract;
use Moves\ApiWrapper\Resource\Contracts\Delete as DeleteContract;
use Moves\ApiWrapper\Resource\Contracts\Get as GetContract;
use Moves\ApiWrapper\Resource\Contracts\Update as UpdateContract;
use Moves\ApiWrapper\Resource\Operations\All;
use Moves\ApiWrapper\Resource\Operations\Create;
use Moves\ApiWrapper\Resource\Operations\Delete;
use Moves\ApiWrapper\Resource\Operations\Get;
use Moves\ApiWrapper\Resource\Operations\Update;
use Moves\ApiWrapper\Resource\ApiResource;

class BasicApiResource extends ApiResource implements AllContract, CreateContract, DeleteContract, GetContract, UpdateContract
{
    use All;
    use Create;
    use Delete;
    use Get;
    use Update;

    public $idField = 'id';

    public $attributes = [
        'id' => 1
    ];

    public $dirty = [];

    public $casts = [];

    public $didGetAttributes = [];

    public $didSetAttributes = [];

    public function getAttribute(string $key)
    {
        $this->didGetAttributes[] = $key;
        return parent::getAttribute($key);
    }

    public function setAttribute(string $key, $value): ApiResource
    {
        $this->didSetAttributes[] = $key;
        return parent::setAttribute($key, $value);
    }
}
