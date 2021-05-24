<?php

namespace RestAPI\Tests\Controllers;

use RestAPI\ApiController;
use RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}