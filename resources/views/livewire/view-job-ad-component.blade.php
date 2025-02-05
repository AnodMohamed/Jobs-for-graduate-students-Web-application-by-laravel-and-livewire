<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('View Job Ad') }}
    </h2>
</x-slot>

<div class="py-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="container-sm px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
          <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="{{ asset('storage/gallery') }}/{{$job->image}}" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
                <span class="badge bg-secondary mr-1">{{ $job->category->name }} </span>
                
                <span class="badge bg-primary mr-1">{{ $job->company->name }} </span>

                <span class="badge bg-info mr-1">{{ $job->degree }}</span>

                @if ( $job->stauts == '0')
                    <span class="badge bg-warning mr-1">Unactive</span>
                @elseif ($job->stauts == '1')
                    <span class="badge bg-success mr-1">Active</span>

                @endif

            </div>

            <p class="lead">
              <span class="mr-1">
                BHD
              </span>
              <span> {{ $job->sallery }}</span>
            </p>

            <p class="lead font-weight-bold">Skilles</p>
            <p>
              {!! $job->skilles !!}
            </p>


            <p class="lead font-weight-bold">Description</p>

            <p>
              {!! $job->description !!}
            </p>



            <div class="d-flex justify-content-left">
              <!-- Default input -->
              <button class="btn btn-primary btn-md my-0 p" wire:click.prevent="download({{$job->id}})">
                <i class="fas fa-cloud-download-alt mr-3"></i>Download File
              </button>
              @auth
                @if ( Auth::user()->utype == 'STD' )
                    @php
                      $check = DB::table('requests')->where('student_id',Auth::user()->id)->where('job_id',$job->id)->count();
                    @endphp
                    @if ($check == 0)
                        <a  class="btn btn-dark ml-2" href="{{ route('student.apply',['jobad_id'=>$job->id ]) }}"> Apply now </a>

                    @endif
                @endif
              @endauth
           
            </div>



          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </div>
</div>