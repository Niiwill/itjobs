<!-- @push('scripts')
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=orluaejj30g3r6fymv4rb18b45bnrfsojdct6gsht1kvazt8" referrerpolicy="origin"></script>
<script>tinymce.init({selector: 'textarea'});</script>
@endpush -->

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('.js-example-basic-multiple').select2().val({!! json_encode($job->tags()->allRelatedIds()) !!}).trigger('change');
        });
    </script>
@endpush

<x-employer-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodaj Novi Posao') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('job.update', $job->id) }}">
                	@method('PATCH')
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
                                                <input id="variant---" name="type_id" type="radio" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="1" {{ $job->type_id == 1 ? 'checked':''}}> 
                                                <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                    STALNI
                                                </span>
                                            </label>

                                            <label for="variant---" class="px-3 py-2 flex items-center ">
                                                <input id="variant---" name="type_id" type="radio" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="2" {{ $job->type_id == 2 ? 'checked':''}}> 
                                                <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                    HONORARNI
                                                </span>
                                            </label>

                                             <label for="variant---" class="px-3 py-2 flex items-center ">
                                                <input id="variant---" name="type_id" type="radio" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="3" {{ $job->type_id == 3 ? 'checked':''}}> 
                                                <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                    FREELANCE
                                                </span>
                                            </label>
                                </div>
                            </div>
                            
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Kategorija</label>
                                    <select id="country" name='category_id' class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{$job->category_id == $category->id ? "selected" : "" }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                

            					<div class="col-span-6 sm:col-span-4">
            						<label for="title" class="block text-sm font-medium leading-5 text-gray-700">Naziv pozicije</label>
            						<input id="title" name="title" value="{{$job->title}}" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="40">
            					</div>
<!-- 
            					<div class="col-span-6">
            						<label for="about" class="block text-sm leading-5 font-medium text-gray-700 mb-4">
										Upišite tekst oglasa
            						</label>
            						<textarea id="mytextarea" name="text" rows="20"></textarea>
            					</div> -->
            					<!-- <p>Partner odgovara za tačnost i istinitost svih podataka koje dostavi PrekoVeze za potrebe sastavljanja Informacije o Partneru. Partner garantuje PrekoVeze da na tekstu, fotografijama, graficima i sličnom, koje dostavlja PrekoVeze za potrebe Informacije o Partneru, polaže autorska i srodna prava i obavezuje se da trećim licima i PrekoVeze nadoknadi svu eventualno nastalu štetu u slučaju povrede navedenih prava. -->

                                <!-- Prema Zakonu o oglašavanju zabranjen je svaki vid obmanjujućeg, prikrivenog i upoređujućeg oglašavanja kojim se dovode u zabludu primaoci oglasne poruke. Oglasna poruka treba da sadrži isključivo podatke o predmetu koji se prodaje ili usluzi koja se pruža, odnosno podaci o potrebama Partnera ili Oglašivača za radnom snagom, sa nazivom radnog mesta, opisom poslova i uslova koje Poslodavac zahteva za obavljanje traženog posla. U oglasnim porukama nije dopuštena upotreba fotografija sa drugih oglasnih sajtova ili iz oglasa drugih oglašivača na našem sajtu.</p> -->

            					<div class="col-span-6 sm:col-span-3">
            						<label for="country" class="block text-sm font-medium leading-5 text-gray-700">Senioritet</label>
            						<select id="country" name="level_id" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
            							<option value="1" {{$job->level_id == '1' ? "selected" : "" }}>Junior</option>
            							<option value="2" {{$job->level_id == '2' ? "selected" : "" }}>Intermediate</option>
            							<option value="3" {{$job->level_id == '3' ? "selected" : "" }}>Senior</option>
            						</select>
            					</div>

            					<div class="col-span-6 sm:col-span-3">
            						<label for="country" class="block text-sm font-medium leading-5 text-gray-700">Grad</label>
            						<select id="country" name="city_id" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="1" {{$job->level_id == '1' ? "selected" : "" }}>Podgorica</option>
                                        <option value="2" {{$job->level_id == '2' ? "selected" : "" }}>Nikšić</option>
                                        <option value="3" {{$job->level_id == '3' ? "selected" : "" }}>Pljevlja</option>
                                        <option value="4" {{$job->level_id == '4' ? "selected" : "" }}>Bijelo Polje</option>
                                        <option value="5" {{$job->level_id == '5' ? "selected" : "" }}>Cetinje</option>
                                        <option value="6" {{$job->level_id == '6' ? "selected" : "" }}>Bar</option>
                                        <option value="7" {{$job->level_id == '8' ? "selected" : "" }}>Herceg Novi</option>
                                        <option value="8" {{$job->level_id == '8' ? "selected" : "" }}>Berane</option>
                                        <option value="9" {{$job->level_id == '9' ? "selected" : "" }}>Budva</option>
                                        <option value="10" {{$job->level_id == '10' ? "selected" : "" }}>Ulcinj</option>
                                        <option value="11" {{$job->level_id == '11' ? "selected" : "" }}>Tivat</option>
                                        <option value="12" {{$job->level_id == '12' ? "selected" : "" }}>Rožaje</option>
                                        <option value="13" {{$job->level_id == '13' ? "selected" : "" }}>Kotor</option>
                                        <option value="14" {{$job->level_id == '14' ? "selected" : "" }}>Danilovgrad</option>
                                        <option value="15" {{$job->level_id == '15' ? "selected" : "" }}>Mojkovac</option>
                                        <option value="16" {{$job->level_id == '16' ? "selected" : "" }}>Plav</option>
                                        <option value="17" {{$job->level_id == '17' ? "selected" : "" }}>Kolašin</option>
                                        <option value="18" {{$job->level_id == '18' ? "selected" : "" }}>Žabljak</option>
                                        <option value="19" {{$job->level_id == '19' ? "selected" : "" }}>Plužine</option>
                                        <option value="20" {{$job->level_id == '20' ? "selected" : "" }}>Andrijevica</option>
            						</select>
            					</div>


            					<div class="col-span-6 sm:col-span-3">
            						<label for="expired_at" class="block text-sm font-medium leading-5 text-gray-700">Rok za prijavu</label>
            						<input type="date" id="expired_at" name="expired_at" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$job->expired_at}}">
            					</div>

                                <div class="col-span-6 ">
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
</x-employer-layout>
