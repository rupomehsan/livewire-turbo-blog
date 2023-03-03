<?php

namespace App\Http\Livewire\Component;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{

    use WithPagination;
    public $blogArray;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $blogs = Blog::paginate(10);
        return view('livewire.component.blog-component', ['blogs' => $blogs]);
    }
}
