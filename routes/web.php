<?php

use App\Http\Livewire\Admin\AddCategoryComponent;
use App\Http\Livewire\Admin\AdminJobAdsTableComponent;
use App\Http\Livewire\Admin\AdminViewJobAdComponent;
use App\Http\Livewire\Admin\CategoryTableComponent;
use App\Http\Livewire\Admin\CompaniesTableComponent;
use App\Http\Livewire\Admin\StudentTableComponent;
use App\Http\Livewire\AllJobAdsComponent;
use App\Http\Livewire\Company\AddJobAdComponent;
use App\Http\Livewire\Company\CompanyJobsTableComponent;
use App\Http\Livewire\Company\CompanyRequestsTableComponent;
use App\Http\Livewire\Company\CompanyViewJobAdComponent;
use App\Http\Livewire\Company\CompanyViewRequestComponent;
use App\Http\Livewire\Company\EditJobAdComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Student\StudentApplyJobAdComponent;
use App\Http\Livewire\Student\StudentMYRequestsComponent;
use App\Http\Livewire\Student\StudentViewRequestComponent;
use App\Http\Livewire\ViewJobAdComponent;
use Facade\Ignition\Middleware\AddJobInformation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', HomeComponent::class)->name('home');
Route::get('/allJobAds', AllJobAdsComponent::class)->name('allJobAds');
Route::get('/jobAd/view/{jobad_id:id}', ViewJobAdComponent::class)->name('jobad.view');





Route::middleware(['auth:sanctum','verified','authAdmin'])->group(function(){

    Route::get('/admin/category', CategoryTableComponent::class)->name('admin.category');
    Route::get('/admin/category/add', AddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/companies', CompaniesTableComponent::class)->name('admin.companies');
    Route::get('/admin/students', StudentTableComponent::class)->name('admin.students');
    Route::get('/admin/jobAds', AdminJobAdsTableComponent::class)->name('admin.jobads');
    Route::get('/admin/jobAd/view//{jobad_id:id}', AdminViewJobAdComponent::class)->name('admin.jobad.view');

});



Route::middleware(['auth:sanctum','verified','authCompany'])->group(function(){
    Route::get('/company/jobs', CompanyJobsTableComponent::class)->name('company.jobs');
    Route::get('/company/job/add', AddJobAdComponent::class)->name('company.job.add');
    Route::get('/company/jobAd/view/{jobad_id:id}', CompanyViewJobAdComponent::class)->name('company.jobad.view');
    Route::get('/company/jobAd/requests/{jobad_id:id}', CompanyRequestsTableComponent::class)->name('company.jobad.requests');
    Route::get('/company/jobAd/requests/view/{request_id:id}', CompanyViewRequestComponent::class)->name('company.jobad.requests.view');

});




Route::middleware(['auth:sanctum','verified','authStudent'])->group(function(){
    Route::get('/student/apply/{jobad_id:id}', StudentApplyJobAdComponent::class)->name('student.apply');
    Route::get('/student/requests', StudentMYRequestsComponent::class)->name('student.requests');
    Route::get('/student/requests/view/{request_id:id}', StudentViewRequestComponent::class)->name('student.requests.view');


});