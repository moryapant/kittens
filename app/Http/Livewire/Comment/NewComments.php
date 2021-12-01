<?php

namespace App\Http\Livewire\Comment;

use Canvas\Models\Post;
use Livewire\Component;

class NewComments extends Component



{

    public $post;
    public $body;
    public $col;


    public function  mount(Post $post, $col) {

        $this->post = $post;
        $col == 0 ? $this->col = null : $this->col = $col;


    }

    public function addComment() {

            auth()->user()->comments()->create([

                'body' => $this->body,
                'post_id' => $this->post->id,
                'reply_id' => $this->col,



            ]);

            $this->body = "";

            $this->emit('CommentCreated');
    }


    public function render()
    {
        return view('livewire.comment.new-comments')->extends('layouts.app');
    }
}
