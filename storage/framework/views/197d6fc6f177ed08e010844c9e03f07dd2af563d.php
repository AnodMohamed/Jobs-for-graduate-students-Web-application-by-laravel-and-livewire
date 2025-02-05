 <?php $__env->slot('header', null, []); ?> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <?php echo e(__('Categories')); ?>

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
                        <option value="slug">Slug</option>
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
                <div class="col-2" >
                     <!-- Button trigger modal -->
                    <a href="<?php echo e(route('admin.category.add')); ?>" class=" btn-info block appearance-none w-full  text-center py-3 px-4 pr-8 rounded leading-tight focus:outline-none " id="grid-state"  >
                        <i class="fa-solid fa-plus"></i>  Add
                    </a>
                   
                </div>

            </div>
            <table class="table-auto w-full mb-6">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Created At</th>
                        <th class="px-4 py-2"> Control</th>

                    </tr>
                </thead>
                <tbody>
                
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border px-4 py-2"><?php echo e($category->id); ?></td>
                            <td class="border px-4 py-2"><?php echo e($category->name); ?></td>
                            <td class="border px-4 py-2"><?php echo e($category->slug); ?></td>
                            <td class="border px-4 py-2"><?php echo e($category->created_at); ?></td>
                            <td class="border px-4 py-2">
                
                               <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-mdb-toggle="modal" data-mdb-target="#exampleModalDelete<?php echo e($category->id); ?>">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal top fade" id="exampleModalDelete<?php echo e($category->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog   modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       Are you sure you want delete <?php echo e($category->name); ?>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                        No
                                        </button>
                                        <button type="button" class="btn btn-primary" wire:click.prevent="deleteCategory(<?php echo e($category->id); ?>)">Yes</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>

                           
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo $categories->links(); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\jfgsb-main\resources\views/livewire/admin/category-table-component.blade.php ENDPATH**/ ?>