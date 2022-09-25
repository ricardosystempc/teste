<?php
return [

    'title_index' => 'Listando as Categorias',
    'title_new'   => 'Criar Categoria',
    'title_edit'  => 'Editar categoria',

    'label_name'                => 'Nome',
    'label_choose_category'     => 'Escolha uma categoria...',
    'label_slug'                => 'Slug',
    'label_parent_name'         => 'Categoria pai',  

     // Validations
     'name' => [
        'required'   => 'O nome é obrigatório. Bunda mole',
        'min_length' => 'Pelo menos 3 Caracteres',
        'max_length' => 'Maxímo permitidos de Caracteres 90',
        'is_unique' => 'Essa categoria já existe',
    ],

];