<?php
return [

    'title_index' => 'List of Categories',
    'title_new'   => 'Create Category',
    'title_edit'  => 'Edit Category',

    'label_name'                => 'Name',
    'label_choose_category'     => 'select a category',
    'label_slug'                => 'Slug',
    'label_parent_name'         => 'Main Category',  

     // Validations
     'name' => [
        'required'   => 'Name is required.',
        'min_length' => 'At least 3 characters',
        'max_length' => 'Maximum characters allowed 90',
        'is_unique' => 'This category already exists',
    ],

];