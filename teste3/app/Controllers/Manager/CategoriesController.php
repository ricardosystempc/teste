<?php

namespace App\Controllers\Manager;

use App\Models\CategoryModel;

use App\Controllers\BaseController;

class CategoriesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Categorias'
        ];

        return view('Manager/Categories/index', $data);
    }

    public function getAllCategories()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        $categoryModel = new CategoryModel();

        $categories = $categoryModel->asObject()->orderBy('id', 'DESC')->findAll();

        echo '<pre>';
        print_r($categories);
        exit;

        $data = [];
      
    }
}
