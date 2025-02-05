<?php

namespace App\Http\Livewire\Admin;

use App\Models\Jobad;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AdminJobAdsTableComponent extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $status = '0';


    public function deleteJobAd($id)
    {
        $jobad =Jobad::find($id);
        $jobad->delete();
        session()->flash('message','Job Ad has been deleted successfully!');
        return redirect()->route('admin.jobads');

    }
    
    public function activeJobad($id)
    {
        $ad =Jobad::find($id);
        $ad->stauts = '1';
        $ad->save();
        session()->flash('message','Ad has been activated successfully!');
        return redirect()->route('admin.jobads');

   
    }

    public function unactiveJobAd($id)
    {
        $ad =Jobad::find($id);
        $ad->stauts = '0';
        $ad->save();
        session()->flash('message','Ad has been unactivated successfully!');
        return redirect()->route('admin.jobads');

   
    }

    public function render()
    {
        return view('livewire.admin.admin-job-ads-table-component', [
            'JobAds' => Jobad::search($this->search)
                ->Where('stauts', $this->status)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ])->layout('layouts.app');
    }
}
