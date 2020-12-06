<x-employer-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaši oglasi') }}
        </h2>
    </x-slot>


<!-- Container -->
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
  <!-- Grid wrapper -->
  <div class="-mx-4 flex flex-wrap">
    <!-- Grid column -->
    <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
      <!-- Column contents -->
      <div class="flex-1 px-10 py-12 bg-white rounded-lg shadow-lg">
        <div class="text-blue bg-blue-opacity-1 circle-56 font-size-6 mr-7">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
          </svg>
        </div>
      </div>
    </div>
    <!-- Grid column -->
    <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
      <!-- Column contents -->
      <div class="flex-1 px-10 py-12 bg-white rounded-lg shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
</svg>
      </div>
    </div>
    <!-- Grid column -->
    <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
      <!-- Column contents -->
      <div class="flex-1 px-10 py-12 bg-white rounded-lg shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
  <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
</svg>
      </div>
    </div>
  </div>
</div>




        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           @if(session('status'))
                @livewire('alert')
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Naziv oglasa
              </th>
              <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Datum isteka:
              </th>
              <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Prijave
              </th>
              <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-6 py-3 bg-gray-50">
                <span class="sr-only">Izmeni</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($jobs as $job)
                                          
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$job->title}}</div>
                    <div class="text-sm text-gray-500">{{$job->category->name}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$job->expired_at}}</div>
                </td>
                
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Pogledaj prijave</a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      Aktivno
                  </span>
              </td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
             
                <a href="{{ route('job.edit', $job->id) }}" class="">
                   <div class="w-full sm:w-auto inline-flex items-center justify-center text-blue-400  group-hover:text-purple-500 font-medium leading-none bg-white rounded-lg py-3 px-5 border border-transparent transform group-hover:-translate-y-0.5 transition-all duration-150">
                  Uredi
                  <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-400 ml-2">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                  </div>
                </a>
                
            </td>
        </tr>
        @endforeach

        <!-- More rows... -->
    </tbody>
        </table>
      </div>
    </div>
  </div>

            </div>
        </div>
    </div>
</x-employer-layout>
