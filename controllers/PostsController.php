<?php 

namespace Phanton\Controlllers;
use Phanton\Core\App;

class PostsController 
{
    public function store()
    {
        App::get('database')->insert('posts', [
            'title' => $_POST['title']
        ]);
        
        redirect("demo");
    }
}