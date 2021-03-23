<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Post extends Component
{
    public $posts, $title, $body, $post_id;

    public function mount($id=false)
    {
        $this->post_id = $id;

    }
    public function render()
    {
        if(is_numeric($this->post_id)){
            $this->posts = \App\Models\Post::where('user_id', Auth::user()->id)
                ->where('id', '=', $this->post_id)
                ->get();
            return view('livewire.post');
        }

    }
}
