<?php

namespace App\Http\Livewire\Company;

use App\Models\Category;
use App\Models\Jobad;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyViewJobAdComponent extends Component
{
    use WithPagination;

    public $jobad_id;

    public function mount($jobad_id)
    {

       $job = Jobad::Where('id',$jobad_id)->first();
       $this->job = $job;

    }
    public function download($id)
    {
        $job =Jobad::find($id);
        return response()->download(storage_path('app/files/'. $job->file));
    }

    public function render()
    {
        return view('livewire.company.company-view-job-ad-component')->layout('layouts.app');
        
    }
    
    
}
