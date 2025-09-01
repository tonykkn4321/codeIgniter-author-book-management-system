<?php

namespace App\Controllers;

use App\Models\AuthorModel;
use CodeIgniter\RESTful\ResourceController;

class AuthorController extends ResourceController
{
    protected $modelName = AuthorModel::class;
    protected $format = 'json';
}
