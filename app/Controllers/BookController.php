<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\RESTful\ResourceController;

class BookController extends ResourceController
{
    protected $modelName = BookModel::class;
    protected $format = 'json';
}
