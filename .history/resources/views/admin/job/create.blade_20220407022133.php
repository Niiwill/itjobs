@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<!-- Tinymce -->
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=orluaejj30g3r6fymv4rb18b45bnrfsojdct6gsht1kvazt8" referrerpolicy="origin"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>

    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            maximumSelectionLength: 3,
            formatSelectionTooBig: function (limit) {
                return 'Maksimalan broj tagova je 3';
            }  
        });
    });

    tinymce.init({
        selector: 'textarea',
        plugins: 'lists,link',
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist | link",
        style_formats: [
            {title: 'Podnaslov', format: 'h3'},
            {title: 'Paragraf', format: 'p'}
        ],
        menubar:false
    });

</script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novi Posao') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('admin.jobs.store') }}">
                    @csrf
            		<div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 sm:px-6 bg-gray-800 border-b border-gray-200">
                          <h3 class="text-lg leading-6 font-medium text-white">
                            Detalji posla
                          </h3>
                        </div>
                    
            			<div class="px-4 py-5 bg-white sm:p-6">
            				<div class="grid grid-cols-6 gap-9">
                                <div class="col-span-6">
                                    <label for="title" class="block text-sm font-medium leading-5 text-gray-700">TIP :</label>

                                    <div class="flex flex-wrap items-center -mx-3">

                                        <label for="variant---" class="px-3 py-2 flex items-center ">
                                            <input id="variant---" name="type_id" type="radio" checked="" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="1"> 
                                            <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                STALNI
                                            </span>
                                        </label>

                                        <label for="variant---" class="px-3 py-2 flex items-center ">
                                            <input id="variant---" name="type_id" type="radio" checked="" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="2"> 
                                            <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                HONORARNI
                                            </span>
                                        </label>

                                        <label for="variant---" class="px-3 py-2 flex items-center ">
                                            <input id="variant---" name="type_id" type="radio" checked="" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="3"> 
                                            <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                FREELANCE
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-span-2">
                                    <label for="company" class="block text-sm font-medium leading-5 text-gray-700">Kompanija</label>
                                    <select id="company" name="company_id" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            
                                <div class="col-span-2">
                                    <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Kategorija</label>
                                    <select id="country" name='category_id' class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-2">
                                    <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Senioritet</label>
                                    <select id="country" name="level_id" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="1">Junior</option>
                                        <option value="2">Intermediate</option>
                                        <option value="3">Senior</option>
                                    </select>
                                </div>
                                

            					<div class="col-span-6 sm:col-span-4">
            						<label for="title" class="block text-sm font-medium leading-5 text-gray-700">Naziv pozicije</label>
            						<input id="title" name="title" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="40" required>
            					</div>

            					<div class="col-span-6">
            						<label for="about" class="block text-sm leading-5 font-medium text-gray-700 mb-4">
										Upišite tekst oglasa
            						</label>
            						<textarea id="mytextarea" name="text" rows="20"></textarea>
            					</div>	

            					<div class="col-span-2">
            						<label for="city" class="block text-sm font-medium leading-5 text-gray-700">Grad</label>
            						<select id="city" name="city_id" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach ($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
            						</select>
            					</div>


            					<div class="col-span-2">
            						<label for="street_address" class="block text-sm font-medium leading-5 text-gray-700">Rok za prijavu</label>
            						<input type="date" id="expired_at" name="expired_at" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
            					</div>

                                <div class="col-span-2">
                                    <label for="status" class="block text-sm font-medium leading-5 text-gray-700">Status</label>
                                    <select id="status" name="status" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="0">Neaktivan</option>
                                        <option value="1">Aktivan</option>
                                    </select>
                                </div> 
                        
                                <div class="col-span-2">
                                    <label for="country" class="block text-sm font-medium leading-5 text-gray-700">TAGOVI</label>
                                    <select name="tags[]" multiple="multiple" class="js-example-basic-multiple mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
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


    <div class="conatiner-fluid content-inner mt-4 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Novi Oglas</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.jobs.store') }}"">
                            @csrf

                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleFormControlSelect1">Tip posla</label>
                                        <select class="form-select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Izaberi</option>
                                            <option value="1">Stalni</option>
                                            <option value="2">Honorarni</option>
                                            <option value="3">Freelance</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleFormControlSelect1">Kompanija</label>
                                        <select class="form-select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Izaberi</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleFormControlSelect1">Kategorija</label>
                                        <select class="form-select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Izaberi</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleFormControlSelect1">Senioritet</label>
                                        <select class="form-select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Izaberi</option>
                                            <option value="1">Junior</option>
                                            <option value="2">Intermediate</option>
                                            <option value="3">Senior</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Naziv pozicje</label>
                                <input name="title" type="text" class="form-control" id="exampleInputText1" value="Mark Jhon" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleFormControlTextarea1">Tekst oglasa</label>
                                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>

                            <hr class="my-4">

                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleFormControlSelect1">Grad</label>
                                        <select name="city_id" class="form-select" id="exampleFormControlSelect1">
                                            @foreach ($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputdate">Date Input</label>
                                        <input name="expired_at" type="date" class="form-control" id="exampleInputdate" value="202231-1">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleFormControlSelect1">Status</label>
                                        <select name="status" class="form-select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Izaberi</option>
                                            <option value="0">Neaktivan</option>
                                            <option value="1">Aktivan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="country" class="block text-sm font-medium leading-5 text-gray-700">TAGOVI</label>
                                <select name="tags[]" multiple="multiple" class="js-example-basic-multiple mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
         
                            <button type="submit" class="btn btn-primary mt-4">Sačuvaj</button>
                        </form>
                    </div>
                </div>
</x-app-layout>
