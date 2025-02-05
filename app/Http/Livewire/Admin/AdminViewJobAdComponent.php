<?php

namespace App\Http\Livewire\Admin;

use App\Models\Jobad;
use Livewire\Component;

class AdminViewJobAdComponent extends Component
{
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
        return view('livewire.admin.admin-view-job-ad-component')->layout('layouts.app');
    }
}
