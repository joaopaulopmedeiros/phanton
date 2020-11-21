<?php 

class PagesController 
{
    public function home()
    {

        $posts = App::get('database')->selectAll('posts', "Post");

        return view('index', [
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function posts()
    {
        App::get('database')->insert('posts', [
            'title' => $_POST['title']
        ]);
        
        header('Location: /');
    }
}