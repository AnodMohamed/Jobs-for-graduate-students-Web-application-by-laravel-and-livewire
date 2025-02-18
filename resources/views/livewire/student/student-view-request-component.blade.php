<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('View Request Application') }}
    </h2>
</x-slot>

<div class="py-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="container-sm px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
          <!--Grid row-->
      <div class="row wow fadeIn">


        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Content-->
          <div class="p-4">

            <p class="lead font-weight-bold">Note</p>
            <p>
              {{ $Request->note }}
            </p>


            <div class="d-flex justify-content-left">

              <button class="btn btn-light btn-md my-0 p  mr-2" wire:click.prevent="downloadCv({{$Request->id}})">
                <i class="fas fa-file-alt mr-2"></i>Download CV
              </button>

                              
                <button class="btn btn-dark btn-md my-0 p  mx-2" wire:click.prevent="downloadFiles({{$Request->id}})">
                  <i class="fas fa-copy mr-2"></i>Download Files
                </button>
            </div>


          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </div>
</div>