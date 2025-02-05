<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Requests') }}
        </h2>
    </x-slot>
    
    <div class="py-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="container-sm px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
    
            <div>
                
                @if (Session::has('message'))
                    <div class="row pb-20">
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                    </div>
                   
                @endif
                <div class="flex pb-20 row">
                
                    <div class="col-3 ">
                        <select wire:model="orderBy" class=" block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="id">ID</option>
                            <option value="created_at">Created at</option>
                        </select>
                     
                    </div>
                    <div class="col-3 ">
                        <select wire:model="orderAsc" class=" block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="1">Ascending</option>
                            <option value="0">Descending</option>
                        </select>
                    
                    </div>
                    <div class="col-3 ">
                        <select wire:model="perPage" class=" block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                   
                    </div>
                    <div class="col-3 ">
                        <select wire:model="status" class=" block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="pending">Pending</option>
                            <option value="nominee">Nominee</option>
                            <option value="rejected">Rejected</option>

                        </select>
                      
                    </div>
    
                   
                </div>
                <table class="table-auto w-full mb-6">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Created At</th>
                            <th class="px-4 py-2">Control</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach($Requests as $Request)
                            <tr>
                                <td class="border px-4 py-2">{{ $Request->id }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('jobad.view',['jobad_id'=>$Request->job->id ]) }}" class="about_btn">
                                        {{ $Request->job->name }}
                                      </a>
                                   </td>
                                <td class="border px-4 py-2">{{ $Request->created_at }}</td>
                                <td class="border px-4 py-2">
                    
                                  
    
                                  
                                <a href="{{ route('company.jobad.requests.view',['request_id'=>$Request->id ]) }}" class=" btn btn-primary" id="grid-state"  >
                                    <i class="fa-solid fa-eye"></i>
                                 </a>
                                  
                                 @if ( $Request->status  == 'pending')
                                    <button type="button" class="btn btn-success" wire:click.prevent="addtoNominee({{$Request->id}})">
                                        <i class="fas fa-user-plus"></i>
                                    </button>

                            
                                    <button type="button" class="btn btn-warning" wire:click.prevent="reject({{$Request->id}})">
                                        <i class="fa-solid fa-ban"></i>
                                    </button> 
                                    
                                 @endif
                                </td>
    
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
                {{------next ... 1, 2 ,3-------}}
                {!! $Requests->links() !!} 
            </div>
        </div>
    </div>
    
</div>
