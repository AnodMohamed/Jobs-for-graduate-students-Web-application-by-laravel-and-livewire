<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class CompaniesTableComponent extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $status = '0';


    public function deleteCompany($id)
    {
        $company =User::find($id);
        $company->delete();
        session()->flash('message','Company has been deleted successfully!');
        return redirect()->route('admin.companies');

   
    }

    public function activeCompany($id)
    {
        $company =User::find($id);
        $company->status = '1';
        $company->save();
        session()->flash('message','Company has been activated successfully!');
        return redirect()->route('admin.companies');

   
    }

    public function unactiveCompany($id)
    {
        $company =User::find($id);
        $company->status = '0';
        $company->save();
        session()->flash('message','Company has been unactivated successfully!');
        return redirect()->route('admin.companies');

   
    }

    public function render()
    {
        return view('livewire.admin.companies-table-component', [
            'companies' => User::search($this->search)
                ->where('utype', 'COMPADM')
                ->Where('status', $this->status)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ])->layout('layouts.app');
    }
}
