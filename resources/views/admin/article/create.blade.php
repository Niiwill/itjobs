@push('scripts')
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=orluaejj30g3r6fymv4rb18b45bnrfsojdct6gsht1kvazt8" referrerpolicy="origin"></script>
<script>tinymce.init({
selector: 'textarea',
plugins: 'lists,link',
toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist | link",
style_formats: [
{title: 'Podnaslov', format: 'h3'},
{title: 'Paragraf', format: 'p'}
],
menubar:false
});</script>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

<script type="text/javascript">
$(document).ready(function(){

    $('#article_category :radio').change(function(){
        console.log(this.value);
       if( this.value === '2' )
           $('.događaj-input').slideDown('slow'); 
        else if( $('.događaj-input').is(':visible') )
           $('.događaj-input').slideUp('slow');               
    }); 
    // TIME PICKER FOR INPUT
    var timepicker = new TimePicker('#time', {
      lang: 'en',
      theme: 'dark'
    });
    timepicker.on('change', function(evt) {
      
      var value = (evt.hour || '00') + ':' + (evt.minute || '00');
      evt.element.value = value;

    });
});

</script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Novi Tekst ili Događaj
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                    @csrf
            		<div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 sm:px-6 bg-gray-800 border-b border-gray-200">
                          <h3 class="text-lg leading-6 font-medium text-white">
                            Detalji
                          </h3>
                        </div>
                    
            			<div class="px-4 py-5 bg-white sm:p-6">
            				<div class="grid grid-cols-6 gap-9">
                                <div id="article_category" class="col-span-6">
                                    <label for="title" class="block text-sm font-medium leading-5 text-gray-700">TIP :</label>

                                        <div class="flex flex-wrap items-center -mx-3">

                                            <label for="variant---" class="px-3 py-2 flex items-center ">
                                                <input name="article_category_id" type="radio" checked="" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="1"> 
                                                <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                    TEKST
                                                </span>
                                            </label>

                                            <label for="variant---" class="px-3 py-2 flex items-center ">
                                                <input name="article_category_id" type="radio" checked="" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="2"> 
                                                <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                   DOGAĐAJ
                                                </span>
                                            </label>
                                </div>
                            </div>

                                <div class="col-span-1 događaj-input">
                                    <label for="date" class="block text-sm font-medium leading-5 text-gray-700">Datum događaja</label>
                                    <input type="date" id="article_event_date" name="article_event_date" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div> 
                                <div class="col-span-1 događaj-input">
                                    <label for="article_event_date" class="block text-sm font-medium leading-5 text-gray-700">Vreme događaja</label>
                                    <input type="text" id="time" name="article_event_time" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div> 
                                <div class="col-span-3 događaj-input">
                                    <label for="location" class="block text-sm font-medium leading-5 text-gray-700">Lokacija događaja</label>
                                    <input type="text" id="location" name="location" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="100">
                                </div>
                                
            					<div class="col-span-2">
            						<label for="title" class="block text-sm font-medium leading-5 text-gray-700">Naziv priče ili događaja</label>
            						<input type="text" id="title" name="title" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="80" required>
            					</div>
                                <div class="col-span-4">
                                    <label for="description" class="block text-sm font-medium leading-5 text-gray-700">Kratak opis</label>
                                    <input type="text" id="description" name="description" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="140">
                                </div>
                                
                                <div class="col-span-3">
                                    <label for="main_image" class="block text-sm font-medium leading-5 text-gray-700">Glavna slika</label>
                                    <input type="file" id="main_image" name="main_image" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="40" required>
                                </div>

            					<div class="col-span-6">
            						<label for="about" class="block text-sm leading-5 font-medium text-gray-700 mb-4">
										Upišite tekst
            						</label>
            						<textarea id="mytextarea" name="text" rows="20"></textarea>
            					</div>

                                <div class="col-span-2">
                                    <label for="status" class="block text-sm font-medium leading-5 text-gray-700">Status</label>
                                    <select id="status" name="status" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="0">Neaktivan</option>
                                        <option value="1">Aktivan</option>
                                    </select>
                                </div>
            					<!-- <p>Partner odgovara za tačnost i istinitost svih podataka koje dostavi PrekoVeze za potrebe sastavljanja Informacije o Partneru. Partner garantuje PrekoVeze da na tekstu, fotografijama, graficima i sličnom, koje dostavlja PrekoVeze za potrebe Informacije o Partneru, polaže autorska i srodna prava i obavezuje se da trećim licima i PrekoVeze nadoknadi svu eventualno nastalu štetu u slučaju povrede navedenih prava. -->

                                <!-- Prema Zakonu o oglašavanju zabranjen je svaki vid obmanjujućeg, prikrivenog i upoređujućeg oglašavanja kojim se dovode u zabludu primaoci oglasne poruke. Oglasna poruka treba da sadrži isključivo podatke o predmetu koji se prodaje ili usluzi koja se pruža, odnosno podaci o potrebama Partnera ili Oglašivača za radnom snagom, sa nazivom radnog mesta, opisom poslova i uslova koje Poslodavac zahteva za obavljanje traženog posla. U oglasnim porukama nije dopuštena upotreba fotografija sa drugih oglasnih sajtova ili iz oglasa drugih oglašivača na našem sajtu.</p> -->
          

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
