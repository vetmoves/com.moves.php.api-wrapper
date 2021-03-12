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

/**
 * Class JsonPlaceholderPost
 * @property string id
 * @property string userId
 * @property string title
 * @property bool completed
 */
class JsonPlaceholderPost extends ApiResource implements AllContract, CreateContract, DeleteContract, GetContract, UpdateContract
{
    use All;
    use Create;
    use Delete;
    use Get;
    use Update;

    protected $allRoute = 'posts.all';
    protected $createRoute = 'posts.create';
    protected $deleteRoute = 'posts.delete';
    protected $getRoute = 'posts.get';
    protected $updateRoute = 'posts.update';
}
