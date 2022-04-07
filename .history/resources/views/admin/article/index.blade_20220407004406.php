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
                            <h4 class="mb-0">Lista svih vesti</h4>
                        </div>
                        <div class="card-action">
                        <a href="{{ route('admin.companies.create') }}" class="btn btn-primary" role="button">Nova Vest</a>
                        <a href="{{ route('admin.companies.create') }}" class="btn btn-primary d-flex" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="me-1">
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
                                <th>Naslov</th>
                                <th>Tip teksta</th>
                                <th>Status</th>
                                <th>LINK</th>
                                <th>Akcija</th>
                             </tr>
                          </thead>
                          <tbody>
                            @foreach ($articles as $article)

                             <tr>
                                <td>{{ $article->title }}</td>
                                <td>
                                    @if ($article->article_category_id === 1)
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Teskt</span>
                                    @else
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Događaj</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($article->status === 0)
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Neaktivno</span>
                                    @else
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktivno</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($article->article_category_id === 1)
                                    <a class="btn btn-warning" href="{{ route('articles.single', [$article->id, $article->slug]) }}">Link</a>
                                    @else
                                    <a class="btn btn-warning" href="{{ route('events.single', [$article->id, $article->slug]) }}">Link</a>
                                    @endif
                                </td>
                                <td><a class="btn btn-info" href="{{ route('admin.articles.edit', $article->id) }}">Izmeni</a></td>

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
