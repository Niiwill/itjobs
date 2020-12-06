<!-- @push('scripts')
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=orluaejj30g3r6fymv4rb18b45bnrfsojdct6gsht1kvazt8" referrerpolicy="origin"></script>
<script>tinymce.init({
selector: 'textarea',
style_formats: [
{title: 'Zaglavlje', format: 'h3'},
{title: 'Paragraf', format: 'p'},
],
});</script>
@endpush -->

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                maximumSelectionLength: 3,
                formatSelectionTooBig: function (limit) {
                return 'Maksimalan broj tagova je 5';
        }
    });
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
                <form method="POST" action="{{ route('job.store') }}">
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
                            
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Kategorija</label>
                                    <select id="country" name='category_id' class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
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
            						<textarea id="mytextarea" name="description" rows="20"></textarea>
            					</div>
            					<!-- <p>Partner odgovara za tačnost i istinitost svih podataka koje dostavi PrekoVeze za potrebe sastavljanja Informacije o Partneru. Partner garantuje PrekoVeze da na tekstu, fotografijama, graficima i sličnom, koje dostavlja PrekoVeze za potrebe Informacije o Partneru, polaže autorska i srodna prava i obavezuje se da trećim licima i PrekoVeze nadoknadi svu eventualno nastalu štetu u slučaju povrede navedenih prava. -->

                                <!-- Prema Zakonu o oglašavanju zabranjen je svaki vid obmanjujućeg, prikrivenog i upoređujućeg oglašavanja kojim se dovode u zabludu primaoci oglasne poruke. Oglasna poruka treba da sadrži isključivo podatke o predmetu koji se prodaje ili usluzi koja se pruža, odnosno podaci o potrebama Partnera ili Oglašivača za radnom snagom, sa nazivom radnog mesta, opisom poslova i uslova koje Poslodavac zahteva za obavljanje traženog posla. U oglasnim porukama nije dopuštena upotreba fotografija sa drugih oglasnih sajtova ili iz oglasa drugih oglašivača na našem sajtu.</p> -->

            					<div class="col-span-6 sm:col-span-3">
            						<label for="country" class="block text-sm font-medium leading-5 text-gray-700">Senioritet</label>
            						<select id="country" name="level_id" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
            							<option value="1">Junior</option>
            							<option value="2">Intermediate</option>
            							<option value="3">Senior</option>
            						</select>
            					</div>

            					<div class="col-span-6 sm:col-span-3">
            						<label for="country" class="block text-sm font-medium leading-5 text-gray-700">Grad</label>
            						<select id="country" name="city_id" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="0">Remote</option>
                                        <option value="1">Podgorica</option>
                                        <option value="2">Nikšić</option>
                                        <option value="3">Pljevlja</option>
                                        <option value="4">Bijelo Polje</option>
                                        <option value="5">Cetinje</option>
                                        <option value="6">Bar</option>
                                        <option value="7">Herceg Novi</option>
                                        <option value="8">Berane</option>
                                        <option value="9">Budva</option>
                                        <option value="10">Ulcinj</option>
                                        <option value="11">Tivat</option>
                                        <option value="12">Rožaje</option>
                                        <option value="13">Kotor</option>
                                        <option value="14">Danilovgrad</option>
                                        <option value="15">Mojkovac</option>
                                        <option value="16">Plav</option>
                                        <option value="17">Kolašin</option>
                                        <option value="18">Žabljak</option>
                                        <option value="19">Plužine</option>
                                        <option value="20">Andrijevica</option>
            						</select>
            					</div>


            					<div class="col-span-6 sm:col-span-3">
            						<label for="street_address" class="block text-sm font-medium leading-5 text-gray-700">Rok za prijavu</label>
            						<input type="date" id="expired_at" name="expired_at"  max="<?= date('d/m/Y', strtotime("+30 days")) ?>" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
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
