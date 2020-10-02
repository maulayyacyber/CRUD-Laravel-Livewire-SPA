<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;

class Create extends Component
{

    /**
     * define public variable
     */
    public $title;
    public $content;

    /**
     * Real-time Validation
     */

    public function updated($field)
    {
        $this->validateOnly($field, [
            'title'   => 'min:6',
            'content' => 'required|min:25',
        ]);
    }

    /**
     * store function
     */
    public function store()
    {
        $this->validate([
            'title'   => 'min:6',
            'content' => 'required|min:25',
        ]);

        $post = Post::create([
            'title'     => $this->title,
            'content'   => $this->content
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('post.index');

    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
