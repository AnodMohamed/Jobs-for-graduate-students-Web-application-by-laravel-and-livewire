<?php

namespace App\Http\Livewire\Company;

use App\Models\Jobad;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyJobsTableComponent extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $status = '0';

    /*
        status = 0 => pending 
        status = 1 => active 


    */

    public function deleteJobAd($id)
    {
        $jobad =Jobad::find($id);
        $jobad->delete();
        session()->flash('message','Job Ad has been deleted successfully!');
        return redirect()->route('company.jobs');

    }

    public function render()
    {
        return view('livewire.company.company-jobs-table-component', [
            'JobAds' => Jobad::search($this->search)
                ->Where('company_id', Auth::user()->id)
                ->Where('stauts', $this->status)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ])->layout('layouts.app');
    }
}
