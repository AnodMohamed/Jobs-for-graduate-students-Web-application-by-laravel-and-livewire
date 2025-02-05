<?php

namespace App\Http\Livewire;

use App\Models\Jobad;
use Livewire\Component;

class ViewJobAdComponent extends Component
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
        return view('livewire.view-job-ad-component')->layout('layouts.app');
    }
}
