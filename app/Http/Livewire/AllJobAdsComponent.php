<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Jobad;
use Livewire\Component;
use Livewire\WithPagination;

class AllJobAdsComponent extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $category = '';

    public function render()
    {
        return view('livewire.all-job-ads-component', [
            'JobAds' => Jobad::search($this->search)
                ->Where('stauts','1')
                ->Where('category_id', 'like', '%'.$this->category.'%')
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
            ,'Categories' => Category::all()
        ])->layout('layouts.app');
    }
}
