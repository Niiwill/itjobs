<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil Poslodavca') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('status'))
                @livewire('alert')
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('company.update', $company->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 sm:px-6 bg-gray-800 border-b border-gray-200">
                          <h3 class="text-lg leading-6 font-medium text-white">
                            Trenutno javno dostupni podaci
                          </h3>
                        </div>
                    
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-9">

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Ime poslodavca / kompanije</label>
                                    <input type="text" id="name" name="name" value="{{$company->name}}" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                                </div>

                                <div class="col-span-6 sm:col-span-2 overflow-hidden">
                                    <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                                    <input type="file" id="logo" name="logo"  class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="website" class="block text-sm font-medium text-gray-700">Web stranica firme</label>
                                    <input type="url" id="website" name="website" value="{{$company->website}}" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="URL mora sadržati http ili https" >
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    @if(empty($company->logo_path))
                                    <!-- Default slika -->
                                    <img class="rounded-full h-28 w-28 " id="imgPrew" src="https://www.allianceplast.com/wp-content/uploads/2017/11/no-image-300x300.png" alt="your image"/>
                                    @else
                                    <!-- Korsnikov logo -->
                                    <img class="rounded-full h-28 w-28" id="imgPrew" src="{{asset('storage/'.$company->logo_path)}}" alt="{{$company->name}} logo"/>
                                    @endif

                                </div>

                                <div class="col-span-6">
                                    <label for="about" class="block text-sm font-medium text-gray-700">
                                        Opis
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="about" rows="3" name="description" class="form-input block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md">{{$company->description}}</textarea>
                                    </div>
                                </div>

                                 <div class="col-span-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefon</label>
                                    <input type="text" id="phone" name="phone" value="{{$company->phone}}" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>

                                 <div class="col-span-2">
                                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                                    <input type="email" id="email" name="email" value="{{$company->email}}" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-2">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Adresa (Grad,Ulica)</label>
                                    <input type="text" id="address" name="address" value="{{$company->address}}" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
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
