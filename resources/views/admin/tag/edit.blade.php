
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Izmeni Tag') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('admin.tags.update', $tag->id) }}" enctype="multipart/form-data">
                	@method('PATCH')
                    @csrf
            		<div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 sm:px-6 bg-gray-800 border-b border-gray-200">
                          <h3 class="text-lg leading-6 font-medium text-white">
                            Detalji Tag-a
                          </h3>
                        </div>
                    
            			<div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-9">

            				
                                
            					<div class="col-span-6 sm:col-span-4">
            						<label for="title" class="block text-sm font-medium leading-5 text-gray-700">Naziv</label>
            						<input id="title" name="name" value="{{$tag->name}}" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="40">
            					</div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="title" class="block text-sm font-medium leading-5 text-gray-700">Slika</label>
                                    <img src="{{asset('storage/tags/'.$tag->icon)}}" alt="">
                                </div>

                                <div class="col-span-3">
                                    <label for="icon" class="block text-sm font-medium leading-5 text-gray-700">Dodaj i izmeni trenutnu sliku novom</label>
                                    <input type="file" id="icon" name="icon" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>


            				</div>
            			</div>
            			<div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            				<button class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
            					Sačuvaj
            				</button>
            			</div>
            		</div>
            	</form>
            </div>
        </div>
    </div>
</x-app-layout>
