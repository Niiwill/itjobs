@push('scripts')
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=orluaejj30g3r6fymv4rb18b45bnrfsojdct6gsht1kvazt8" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

<script>
    $(document).ready(function(){

        var checked_val = $("input[name='article_category_id']:checked").val();
        if( checked_val == '2' ){$('.događaj-input').show(); }

        $('#article_category :radio').change(function(){
            if( this.value == '2' )
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
            Nova Priča ili Događaj
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('article.update', $article->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
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
                                                <input name="article_category_id" type="radio" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="1" {{$article->article_category_id == 1 ? 'checked':'' }}> 
                                                <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                    PRIČA
                                                </span>
                                            </label>

                                            <label for="variant---" class="px-3 py-2 flex items-center ">
                                                <input name="article_category_id" type="radio" class="form-radio h-4 w-4 text-orange-600 transition duration-150 ease-in-out" value="2" {{$article->article_category_id == 2 ? 'checked':'' }}> 
                                                <span class="block text-sm leading-5 font-medium text-gray-700 ml-3 capitalize">
                                                   DOGAĐAJ
                                                </span>
                                            </label>

                                </div>
                            </div>

                                <div class="col-span-1 događaj-input" style="display: none">
                                    <label for="date" class="block text-sm font-medium leading-5 text-gray-700">Datum događaja</label>
                                    <input type="date" id="article_event_date" name="article_event_date" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $article->article_event_date }}">
                                </div> 
                                <div class="col-span-1 događaj-input" style="display: none">
                                    <label for="article_event_date" class="block text-sm font-medium leading-5 text-gray-700">Vreme događaja</label>
                                    <input type="text" id="time" name="article_event_time" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $article->article_event_time }}">
                                </div> 
                                <div class="col-span-3 događaj-input" style="display: none">
                                    <label for="location" class="block text-sm font-medium leading-5 text-gray-700">Lokacija događaja</label>
                                    <input type="text" id="location" name="location" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="100" value="{{ $article->location }}">
                                </div>
                                
                                <div class="col-span-2">
                                    <label for="title" class="block text-sm font-medium leading-5 text-gray-700">Naziv priče ili događaja</label>
                                    <input type="text" id="title" name="title" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="80" value="{{$article->title}}" required>
                                </div>
                                <div class="col-span-4">
                                    <label for="description" class="block text-sm font-medium leading-5 text-gray-700">Kratak opis</label>
                                    <input type="text" id="description" name="description" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" maxlength="140" value="{{$article->description}}">
                                </div>

                                <div class="col-span-3">
                                    <label for="main_image" class="block text-sm font-medium leading-5 text-gray-700">Trenutna naslovna slika:</label>
                                    <img class="w-60 h-auto" src="{{asset('storage/articles/'.$article->image_url)}}">
                                </div>
                                <div class="col-span-3"></div>

                                <div class="col-span-3">
                                    <label for="main_image" class="block text-sm font-medium leading-5 text-gray-700">Dodaj i izmeni trenutnu sliku novom</label>
                                    <input type="file" id="main_image" name="main_image" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                             
                                
            					<div class="col-span-6">
            						<label for="about" class="block text-sm leading-5 font-medium text-gray-700 mb-4">
										Upišite tekst
            						</label>
            						<textarea id="mytextarea" name="text" rows="20">{{$article->text}}</textarea>
            					</div>

                                <div class="col-span-2">
                                    <label for="status" class="block text-sm font-medium leading-5 text-gray-700">Status</label>
                                    <select id="status" name="status" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="0" {{$article->status == '0' ? "selected" : "" }}>Neaktivan</option>
                                        <option value="1" {{$article->status == '1' ? "selected" : "" }}>Aktivan</option>
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
</x-app-layout>
