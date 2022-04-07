<x-app-layout>
    {{-- <x-slot name="header">
        <a href="{{ route('admin.jobs.create') }}">
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <svg class=" h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#fff">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Dodaj oglas
            </button>
        </a>
    </x-slot> --}}

    <div class="conatiner-fluid content-inner mt-4 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="card-title mb-0">
                            <h4 class="mb-0">Lista svih oglasa</h4>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary" role="button">Novi Oglas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-sm-12">
              <div class="card">
                 <div class="card-body">
                    <div class="table-responsive">
                       <table id="datatable" class="table table-striped" data-toggle="data-table">
                          <thead>
                             <tr>
                                <th>Naziv oglasa</th>
                                <th>Kompanija</th>
                                <th>Kategorija</th>
                                <th>Datum isteka oglasa</th>
                                <th>Status</th>
                                <th>Live</th>
                                <th>Akcija</th>
                             </tr>
                          </thead>
                          <tbody>
                            @foreach ($jobs as $job)

                             <tr>
                                <td>{{$job->title}}</td>
                                <td>{{$job->company->name}}</td>
                                <td>{{$job->category->name}}</td>
                                <td>{{  date('d-m-Y', strtotime($job->expired_at)) }}</td>
                                @if ($job->status == 1)
                                    <td>Aktivan</td>
                                @else
                                    <td>Neaktivan</td>
                                @endif
                                <td><a class="btn btn-warning" href="{{ route('job.single', ['id' => $job->id, 'slug' => $job->slug])}}">Link</a></td>
                                <td><a class="btn btn-info" href="{{ route('admin.jobs.edit', $job->id) }}">
                                    <div class="btn-inner">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                            <g>
                                            <g>
                                            <path d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"></path>
                                            <path d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"></path>
                                            </g>
                                            </g>
                                        </svg>
                                    </div>
                                    Izmeni
                                </a></td>

                             </tr>
                             @endforeach

                            
                          </tbody>
                       </table>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>
</x-app-layout>
