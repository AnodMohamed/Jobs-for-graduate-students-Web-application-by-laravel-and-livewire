<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
class CategoryTableComponent extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;


    public function deleteCategory($id)
    {
        $category =Category::find($id);
        $category->delete();
        session()->flash('message','Category has been deleted successfully!');
        return redirect()->route('admin.category');

   
    }
    
    public function render()
    {
        return view('livewire.admin.category-table-component' , [
            'categories' => Category::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ])->layout('layouts.app');
    }
}
