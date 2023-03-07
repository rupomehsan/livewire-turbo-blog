<?php

namespace App\Http\Livewire\Component;

use App\Models\Comments;
use Livewire\Component;
use Illuminate\Support\Str;

class BlogDetailsComponent extends Component
{

    public $name, $comment, $blog_id,$blogDetails;

    protected $rules = [
        'name' => 'required',
        'comment' => 'required',
        'blog_id' => 'required',
    ];

    public function mount($blogDetails)
    {
        $this->blogDetails = $blogDetails;
        $this->blog_id = $this->blogDetails->id;

    }

    public function resetInputData()
    {
        $this->name = '';
        $this->comment = '';
    }

    public function submitComments()
    {

        $validateData = $this->validate();
        Comments::create($validateData);
        session()->flash('message', 'Comment Successfully create');
         $this->resetInputData();
        $this->dispatchBrowserEvent('success');
        $this->render();
    }

    public function render()
    {
        $blogComments = Comments::where('blog_id',$this->blog_id)->get();
        return view('livewire.component.blog-details-component',['blogComments'=>$blogComments,"blogDetails"=>$this->blogDetails]);
    }
}
