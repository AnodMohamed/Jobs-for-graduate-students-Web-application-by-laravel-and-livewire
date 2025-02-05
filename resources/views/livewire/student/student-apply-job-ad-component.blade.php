

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Apply For Job ') }}
    </h2>
</x-slot>

<div class="py-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="container-sm px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

        <div>
            @if (Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            <form wire:submit.prevent="storeApply">


                  <label class="form-label" for="customFile">CV</label>
                  <input type="file" class="form-control" id="customFile"  wire:model="CV"/>
                   @error('CV')
                        <p class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</p>
                   @enderror

                   <label class="form-label" for="customFile">Files</label>
                   <input type="file" class="form-control" id="customFile"  wire:model="files"/>
                   @error('files')
                        <p class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</p>
                   @enderror
                 
                    <label class="form-label" for="form12">Note </label>
                    <textarea class="form-control" wire:model="note" ></textarea>
                    @error('note')
                        <p class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</p>
                    @enderror

                    
                <button type="submit" class="btn btn-primary mt-5 m-auto" style="display:flex">Submit</button>
            </form>
        </div>
    </div>
</div>
