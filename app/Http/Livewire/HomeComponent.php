<?php

namespace App\Http\Livewire;

use App\Models\Jobad;
use App\Models\User;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $jobads =Jobad::where('stauts','1')
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();

        return view('livewire.home-component',['jobads'=>$jobads])->layout('layouts.base');
    }
}
