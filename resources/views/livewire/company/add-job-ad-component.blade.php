
     
 
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Job Ad') }}
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
            <form wire:submit.prevent="storeAd">

                <label class="form-label" for="form12">Name</label>
                <input type="text" id="" class="form-control" wire:model="name" placeholder="Name"/>
                @error('name')
                    <p class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</p>
                @enderror
               
               
                <label class="form-label" for="form12">Sallery </label>
                <input type="text" id="" class="form-control" wire:model="sallery" placeholder="Sallery"/>
                @error('sallery')
                    <p class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</p>
                @enderror


                  <label class="form-label" for="customFile">Image</label>
                  <input type="file" class="form-control" id="customFile"  wire:model="image"/>
                   @error('image')
                        <p class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</p>
                   @enderror

                   <label class="form-label" for="customFile">File</label>
                   <input type="file" class="form-control" id="customFile"  wire:model="file"/>
                   @error('file')
                        <p class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</p>
                   @enderror

                   <label class="form-label" for="form12">Degree</label>
                    <input type="text" id="" class="form-control" wire:model="degree" placeholder="Degree"/>
                    @error('degree')
                        <p class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</p>
                    @enderror
               
                    <label class="form-label" for="form12">Category</label>
                    <select class="browser-default custom-select form-control" wire:model="category_id">
                        <option selected>Open this select menu</option>
                        @foreach ($categories as $category)
                            <option value='{{ $category->id}}' >{{ $category->name}}</option>

                        @endforeach
                        @error('category_id')
                            <p class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> {{$message}}</p>
                        @enderror
                    </select>
                    <br>

                   
                    <div class="row" wire:ignore>
                        <div class="col-md-12 mb-3">
                          <label for="validationTooltip01">skilles</label>
                          <textarea class="form-control" id="skilles" placeholder="skilles" wire:model="skilles"></textarea>
                        </div>
                        @error('skilles')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    
                    
                   
                    <div class="row" wire:ignore>
                        <div class="col-md-12 mb-3">
                          <label for="validationTooltip01">Description</label>
                          <textarea class="form-control" id="description" placeholder="description" wire:model="description"></textarea>
                        </div>
                        @error('description')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    


            
                <button type="submit" class="btn btn-primary mt-5 m-auto" style="display:flex">Submit</button>
            </form>
        </div>
    </div>
</div>
@push('scripts')
<script>
    
    $(function(){
            tinymce.init({
                selector: '#skilles',
                setup: function (editor) {
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#skilles').val();
                        @this.set('skilles', sd_data);
                    })
                }
            });
          
     });

     $(function(){
            tinymce.init({
                selector: '#description',
                setup: function (editor) {
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#description').val();
                        @this.set('description', sd_data);
                    })
                }
            });
          
     });
</script>
@endpush

  
