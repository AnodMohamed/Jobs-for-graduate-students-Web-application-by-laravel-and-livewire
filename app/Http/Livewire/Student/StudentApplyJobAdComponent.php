<?php

namespace App\Http\Livewire\Student;

use App\Models\Jobad;
use App\Models\Requests;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentApplyJobAdComponent extends Component
{
     use WithFileUploads;
    public $jobad_id;
    public $job_id ;
    public $CV ;
    public $files ;
    public $note ;

    
    public function mount($jobad_id)
    {

       $job = Jobad::Where('id',$jobad_id)->first();
       $this->job_id  = $job->id;


    }
    public function updated($fields)
    {   
        //the user will see the validation live before submit
        $this->validateOnly($fields,[

            'CV'=>'required|mimes:pdf',
            'files'=>'required|mimes:zip',
            'note'=>'required ',

        ]);
        
    }

    public function storeApply()
    {   
        $this->validate([
            'CV'=>'required|mimes:pdf',
            'files'=>'required|mimes:zip',
            'note'=>'required ',

        ]);

       $request = new Requests();
       $request->student_id  = Auth::user()->id;  
       $request->job_id =  $this->job_id;   

       /*cv */
       $cvName      = $this->CV->getClientOriginalName();
       $cvExtention  = time() . '.' . $cvName;
       $this->CV->storeAs('files',$cvExtention);
       $request->CV = $cvExtention; 

       /*files */
       $filesName      = $this->files->getClientOriginalName();
       $filesExtention  = time() . '.' . $filesName;
       $this->files->storeAs('files',$filesExtention);
       $request->files = $filesExtention; 

       $request->note =  $this->note;   
       $request->save();
       session()->flash('message', 'The job application has been successfully submitted');

    }

    public function render()
    {
        return view('livewire.student.student-apply-job-ad-component')->layout('layouts.app');
    }
}
