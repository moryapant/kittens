<?php

namespace App\Http\Livewire\Comment;

use Canvas\Models\Post;
use Livewire\Component;

class AllComments extends Component
{



     public $post;
    //public $show = 'hidden';

    protected $listeners = ['CommentCreated' => '$refresh'];

    public function  mount(Post $post) {

        $this->post = $post;

        //dd( $this->post);
    }

    // public function showmethod(){
    //     $this->show = 'show' ;

    // }


    public function render()
    {
        return view('livewire.comment.all-comments');
    }
}
