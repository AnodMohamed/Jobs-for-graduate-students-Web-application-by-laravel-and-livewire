<?php

namespace App\Http\Livewire\Company;

use App\Models\Requests;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyRequestsTableComponent extends Component
{
    use WithPagination;
    
    
    public $perPage = 10;
    public $orderBy = 'id';
    public $orderAsc = true;
    public $status = 'pending';
    

    public $jobad_id;

    public function mount($jobad_id)
    {

       $requests = Requests::Where('job_id',$jobad_id)->get();
       $this->requests = $requests;

    }
    

    
    public function addtoNominee($id)
    {
        $company =Requests::find($id);
        $company->status = 'nominee';
        $company->save();
        session()->flash('message','The student has been added to nominee list successfully!');
   
    }

    public function reject($id)
    {
        $company =Requests::find($id);
        $company->status = 'rejected';
        $company->save();
        session()->flash('message','The student has been rejected to nominee list successfully!');
   
    }

    public function render()
    {
        $jopad_id = $this->jobad_id;
        return view('livewire.company.company-requests-table-component', [
            'Requests' =>Requests::where('job_id', $jopad_id)
                ->Where('status', $this->status)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
                
              
        ])->layout('layouts.app');
    }
}
