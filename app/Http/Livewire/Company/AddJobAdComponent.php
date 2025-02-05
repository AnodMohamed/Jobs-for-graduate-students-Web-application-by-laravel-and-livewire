<?php

namespace App\Http\Livewire\Company;

use App\Models\Category;
use App\Models\Jobad;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use PHPUnit\Framework\Test;

class AddJobAdComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $sallery;
    public $image;
    public $file;
    public $degree;
    public $category_id;   
    public $skilles;
    public $description;

    public function updated($fields)
    {   
        //the user will see the validation live before submit
        $this->validateOnly($fields,[
            'name' => ['required', 'max:200', 'min:5'],
            'sallery'=>'required | numeric',
            'image'=>'required |mimes:jpg,jpeg,png',
            'file'=>'required|mimes:pdf',
            'degree' => ['required', 'max:200', 'min:2'],
            'category_id'=>'required ',
            'skilles'=>'required ',
            'description'=>'required ',

        ]);

        
    }

    public function storeAd()
    {   
        $this->validate([
            'name' => ['required', 'max:200', 'min:5'],
            'sallery'=>'required | numeric',
            'image'=>'required |mimes:jpg,jpeg,png',
            'file'=>'required|mimes:pdf',
            'degree' => ['required', 'max:200', 'min:3'],
            'category_id'=>'required ',
            'skilles'=>'required ',
            'description'=>'required ',

        ]);
       $ad = new Jobad();
       $ad->name = $this->name;  
       $ad->sallery = $this->sallery;       
       $ad->degree = $this->degree;       
       $ad->category_id = $this->category_id;       
       $ad->skilles = $this->skilles;   
       $ad->description = $this->description;  
       $ad->company_id = Auth::user()->id;   

          
       $fileName      = $this->file->getClientOriginalName(); 
       $fileExtention  = time() . '.' . $fileName;
       $this->file->storeAs('files',$fileExtention);
       $ad->file = $fileExtention; 

       $imageName      = $this->image->getClientOriginalName();
       $imageExtention  = time() . '.' . $imageName;
       $this->image->storeAs('gallery',$imageExtention, 'public');
       $ad->image = $imageExtention;  

 
       $ad->save();
       
       session()->flash('message', 'Ad is added successfully');

    }

    public function render()
    {
        $categories =Category::all();
        return view('livewire.company.add-job-ad-component', ['categories'=>$categories])->layout('layouts.app');
    }
}
