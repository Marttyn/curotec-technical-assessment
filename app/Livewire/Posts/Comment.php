<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Comment extends Component
{
    use WithPagination;

    public Post $post;
    public bool $showModal = false;
    public string $comment = '';

    protected $listeners = ['commentAdded' => 'loadComments'];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function loadComments()
    {
        $this->post->comments()->latest()->paginate(10);
    }

    public function addComment()
    {
        $validated = $this->validate([
            'comment' => 'required|string|max:1000',
        ]);

        $this->post->comments()->create([
            'content' => $validated['comment'],
        ]);

        $this->showModal = false;
        $this->reset('comment');

        // Emit event to update other components
        $this->dispatch('commentAdded');
    }

    public function getCommentsCount()
    {
        return $this->post->comments()->count();
    }

    public function showModal()
    {
        $this->showModal = true;
    }

    public function hideModal()
    {
        $this->showModal = false;
        $this->reset('comment');
    }

    public function render()
    {
        return view('livewire.posts.comment', [
            'comments' => $this->post->comments()->latest()->paginate(10),
        ]);
    }
}
