<?php 

namespace Phanton\Controlllers;
use Phanton\Core\App;

class PagesController 
{
    public function home()
    {
        return view('index');
    
    }

    public function demo()
    {
        $posts = App::get('database')->selectAll('posts', "Post");
        
        return view('demo', [
            'posts' => $posts
        ]);
    }

}