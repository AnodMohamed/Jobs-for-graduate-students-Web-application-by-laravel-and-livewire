<?php

namespace App\Http\Livewire\Admin;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class StudentTableComponent extends Component

{    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;


    public function deleteStudent($id)
    {
        $company =User::find($id);
        $company->delete();
        session()->flash('message','Student has been deleted successfully!');
        return redirect()->route('admin.students');

   
    }
    public function render()
    {
        return view('livewire.admin.student-table-component', [
            'students' => User::search($this->search)
                ->where('utype', 'STD')
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ])->layout('layouts.app');
    }
}
