<?php

namespace App\Http\Livewire\Company;

use App\Models\Requests;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyViewRequestComponent extends Component
{
    use WithPagination;

    public $request_id;

    public function mount($request_id)
    {

       $Request = Requests::Where('id',$request_id)->first();
       $this->Request = $Request;

    }
    public function downloadCv($id)
    {
        $Request =Requests::find($id);
        return response()->download(storage_path('app/files/'. $Request->CV));
    }
    public function downloadFiles($id)
    {
        $Request =Requests::find($id);
        return response()->download(storage_path('app/files/'. $Request->files));
    }
    public function render()
    {
        return view('livewire.company.company-view-request-component')->layout('layouts.app');
    }
}
