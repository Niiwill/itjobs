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
                            <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                 </svg>
                                 Novi Oglas
                            </a>
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
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Live" href="{{ route('job.single', ['id' => $job->id, 'slug' => $job->slug])}}">
                                            <span class="btn-inner">
                                               <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                  <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                               </svg>
                                            </span>
                                         </a>
                                        <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ route('job.single', ['id' => $job->id, 'slug' => $job->slug])}}">
                                           <span class="btn-inner">
                                              <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                           </span>
                                        </a>
                                     </div>
                                </td>

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
