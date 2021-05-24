<?php

namespace RestAPI\Tests\Controllers;

use RestAPI\ApiController;
use RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}