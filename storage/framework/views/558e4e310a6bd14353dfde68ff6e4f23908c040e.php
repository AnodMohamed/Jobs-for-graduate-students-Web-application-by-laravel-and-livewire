 <?php $__env->slot('header', null, []); ?> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <?php echo e(__('Companies')); ?>

    </h2>
 <?php $__env->endSlot(); ?>

<div class="py-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="container-sm px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

        <div>
            
            <?php if(Session::has('message')): ?>
                <div class="row pb-20">
                    <div class="alert alert-success" role="alert">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                </div>
               
            <?php endif; ?>
            <div class="flex pb-20 row">
               
                <div class="  col-4">
                    <input wire:model.debounce.300ms="search" type="text" class=" appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search users...">
                </div>
                <div class=" col-2">
                    <select wire:model="orderBy" class=" block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="id">ID</option>
                        <option value="name">Name</option>
                        <option value="email">Email</option>
                        <option value="created_at">Created at</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <div class="col-2  ">
                    <select wire:model="orderAsc" class=" block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="1">Ascending</option>
                        <option value="0">Descending</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <div class="col-2 ">
                    <select wire:model="perPage" class=" block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <div class="col-2 ">
                    <select wire:model="status" class=" block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="0">Unactive</option>
                        <option value="1">Active</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>

            </div>
            <table class="table-auto w-full mb-6">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Created At</th>
                        <th class="px-4 py-2"> Control</th>

                    </tr>
                </thead>
                <tbody>
                
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border px-4 py-2"><?php echo e($company->id); ?></td>
                            <td class="border px-4 py-2">
                                <?php if($company->profile_photo_path == 'NULL'): ?>
                                    <img src="<?php echo e(asset('storage/profile-photos/default.jpg')); ?>" alt="<?php echo e($company->name); ?>" class="rounded-full h-20 w-20 object-cover">

                                <?php else: ?>
                                    <img src="<?php echo e(asset('storage')); ?>/<?php echo e($company->profile_photo_path); ?>" alt="<?php echo e($company->name); ?>" class="rounded-full h-20 w-20 object-cover">

                                <?php endif; ?>
                            </td>
                            <td class="border px-4 py-2"><?php echo e($company->name); ?></td>
                            <td class="border px-4 py-2"><?php echo e($company->email); ?></td>
                            <td class="border px-4 py-2"><?php echo e($company->created_at); ?></td>
                            <td class="border px-4 py-2">
                
                               <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-mdb-toggle="modal" data-mdb-target="#exampleModalDelete<?php echo e($company->id); ?>">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal top fade" id="exampleModalDelete<?php echo e($company->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                    <div class="modal-dialog   modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Compnay</h5>
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Are you sure you want delete <?php echo e($company->name); ?>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                            No
                                            </button>
                                            <button type="button" class="btn btn-primary" wire:click.prevent="deleteCompany(<?php echo e($company->id); ?>)">Yes</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <?php if( $company->status  == '0'): ?>
                                      <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#exampleModalActive<?php echo e($company->id); ?>">
                                    <i class="fa-solid fa-check"></i>
                                </button>

                                <div class="modal top fade" id="exampleModalActive<?php echo e($company->id); ?>" tabindex="-1" aria-labelledby="exampleModalActive" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                    <div class="modal-dialog   modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Status Compnay</h5>
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Are you sure you want active <?php echo e($company->name); ?>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                            No
                                            </button>
                                            <button type="button" class="btn btn-primary" wire:click.prevent="activeCompany(<?php echo e($company->id); ?>)">Yes</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if( $company->status  == '1'): ?>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-mdb-toggle="modal" data-mdb-target="#exampleModalunactive<?php echo e($company->id); ?>">
                                        <i class="fa-solid fa-ban"></i>
                                    </button>     

                                    <div class="modal top fade" id="exampleModalunactive<?php echo e($company->id); ?>" tabindex="-1" aria-labelledby="exampleModalunactive" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                        <div class="modal-dialog   modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Status Compnay</h5>
                                                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            Are you sure you want unactive <?php echo e($company->name); ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                No
                                                </button>
                                                <button type="button" class="btn btn-primary" wire:click.prevent="unactiveCompany(<?php echo e($company->id); ?>)">Yes</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                               <?php endif; ?>
                            </td>

                           
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo $companies->links(); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\jfgsb-main\resources\views/livewire/admin/companies-table-component.blade.php ENDPATH**/ ?>