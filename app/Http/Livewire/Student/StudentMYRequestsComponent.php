<?php

namespace App\Http\Livewire\Student;

use App\Models\Requests;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class StudentMYRequestsComponent extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $orderBy = 'id';
    public $orderAsc = true;
    public $status = 'pending';

    public function render()
    {
        return view('livewire.student.student-m-y-requests-component', [
            'Requests' =>Requests::where('student_id',Auth::user()->id)
                ->Where('status', $this->status)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ])->layout('layouts.app');
     
    }
}
