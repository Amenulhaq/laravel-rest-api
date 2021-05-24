<?php

namespace RestAPI\Tests\Controllers;

use RestAPI\ApiController;
use RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}