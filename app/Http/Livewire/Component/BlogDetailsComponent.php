<?php

namespace App\Http\Livewire\Component;

use App\Models\Comments;
use Livewire\Component;
use Illuminate\Support\Str;

class BlogDetailsComponent extends Component
{

    public $name, $comment, $blog_id;

    protected $rules = [
        'name' => 'required',
        'comment' => 'required',
        'blog_id' => 'required',
    ];

    public function mount()
    {
        $this->blog_id;
    }

    public function resetInputData()
    {
        $this->name = '';
        $this->comment = '';
        $this->blog_id = '';
    }

    public function submitComments()
    {

        $validateData = $this->validate();
        Comments::create($validateData);
        session()->flash('message', 'Comment Successfully create');
        $this->resetInputData();
        $this->dispatchBrowserEvent('success');
    }

    public function render()
    {

        return view('livewire.component.blog-details-component');
    }
}
