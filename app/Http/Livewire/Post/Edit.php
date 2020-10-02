<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Illuminate\Http\Request;
use Livewire\Component;

class Edit extends Component
{

    /**
    * define public variable
    */
    public $postId;
    public $title;
    public $content;

    /**
     * mount or construct function
     */
    public function mount($id)
    {
        $post = Post::find($id);
        
        if($post) {
            $this->postId   = $post->id;
            $this->title    = $post->title;
            $this->content  = $post->content;
        }
    }

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
     * update function
     */
    public function update()
    {
        $this->validate([
            'title'   => 'min:6',
            'content' => 'required|min:25',
        ]);

        if($this->postId) {

            $post = Post::find($this->postId);
            
            if($post) {
                $post->update([
                    'title'     => $this->title,
                    'content'   => $this->content
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('post.index');

    }

    public function render()
    {
        return view('livewire.post.edit');
    }
}
