<?php 

require_once "models/Post.php";

class PagesController 
{
    public function home()
    {

        $posts = App::get('database')->selectAll('posts', "Post");

        require_once "views/index.php";
    }

    public function about()
    {
        require_once "views/about.php";
    }

    public function posts()
    {
        App::get('database')->insert('posts', [
            'title' => $_POST['title']
        ]);
        
        header('Location: /');
    }
}