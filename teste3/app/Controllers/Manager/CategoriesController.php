<?php

namespace App\Controllers\Manager;


use App\Controllers\BaseController;
use App\Services\CategoryService;
use CodeIgniter\Config\Factories;

class CategoriesController extends BaseController
{

    private $categoryService;

    public function __construct()
    {
        $this->categoryService = Factories::class(CategoryService::class);
    }

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

        return $this->response->setJSON(['data' => $this->categoryService->getAllCategories()]);
      
    }

    public function getCategoryInfo()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        $category = $this->categoryService->getCategory($this->request->getGetPost('id'));

        $options = [
            'class'         => 'form-control',
            'placeholder'   => 'Escolha...',
            'selected'      => !(empty($category->parent_id)) ? $category->parent_id :""
        ];

        $response = [
            'category' => $category,
            'parents'  => $this->categoryService->getMultinivel('parent_id', $options)
        ];

       return $this->response->setJSON($response);
      
    }

    public function update()
    {
        //** validar form */
        $category = $this->categoryService->getCategory($this->request->getGetPost('id'));

        echo '<pre>';
        print_r($category);
        exit;

    }
}
