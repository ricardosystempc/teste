<?php

namespace App\Controllers\Manager;

use App\Models\CategoryModel;
use App\Controllers\BaseController;

class ManagerController extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home do Manager do Ricardo'
        ];

        return view('Manager/Home/index', $data);
    }
}
