@push('scripts')

    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=orluaejj30g3r6fymv4rb18b45bnrfsojdct6gsht1kvazt8" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
    <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

    <script>
        
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

        $(document).ready(function(){

            $('#article_category_id').change(function(){

                if( this.value === '2' ){

                    $('#event_input_group').slideDown('slow'); 

                }else if( $('#event_input_group').is(':visible') ){

                    $('#event_input_group').slideUp('slow');               
                }
            }); 

            // TIME PICKER FOR INPUT
            var timepicker = new TimePicker('#article_event_time', {
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
    <div class="conatiner-fluid content-inner mt-4 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Novi Tekst</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.articles.update', $article->id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="article_category_id">Tip vesti</label>
                                        <select class="form-select" id="article_category_id" name="article_category_id">
                                            <option value="1" {{$article->article_category_id == '1' ? "selected" : "" }}>TEKST</option>
                                            <option value="2" {{$article->article_category_id == '2' ? "selected" : "" }}>DOGAĐAJ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="language">Jezik</label>
                                        <select class="form-select" id="language" name="language">
                                            <option value="sr" {{$article->language == 'sr' ? "selected" : "" }}>Srpski</option>
                                            <option value="en" {{$article->language == 'en' ? "selected" : "" }}>Engleski</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="event_input_group" style="display: none;">

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="article_event_date">Datum Događaja</label>
                                        <input name="article_event_date" type="date" class="form-control" id="article_event_date" value="{{ $article->article_event_date }}">
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="article_event_time">Vreme Događaja</label>
                                        <input name="article_event_time" type="text" class="form-control" id="article_event_time" value="{{ $article->article_event_time }}">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="location" class="form-label">Lokacija događaja</label>
                                        <input type="file" class="form-control" id="location" name="location" value="{{ $article->location }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">


                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Naziv priče ili događaja</label>
                                        <input name="title" type="text" class="form-control" id="title" value="{{$article->title}}" required>
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="description">Kratak opis</label>
                                        <input name="description" type="text" class="form-control" id="description" value="{{$article->description}}" required>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="main_image" class="block text-sm font-medium leading-5 text-gray-700">Trenutna naslovna slika:</label>
                                    <img class="w-60 h-auto" src="{{asset('storage/articles/'.$article->image_url)}}">
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="main_image" class="form-label">Nova glavna slika</label>
                                        <input type="file" class="form-control" id="main_image" name="main_image">
                                    </div>
                                </div>

                                

                            </div>

                            <hr class="my-4">

                            <div class="form-group">
                                <label for="about" class="form-label">Opis - Upišite tekst</label>
                                <textarea id="mytextarea" class="form-control" name="text" rows="20">{{$article->text}}</textarea>
                            </div>


                            <hr class="my-4">

                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleFormControlSelect1">Status</label>
                                        <select name="status" class="form-select" id="exampleFormControlSelect1">
                                            <option value="0" {{$article->status == '0' ? "selected" : "" }}>Neaktivan</option>
                                            <option value="1" {{$article->status == '1' ? "selected" : "" }}>Aktivan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
         
                            <button type="submit" class="btn btn-primary mt-4">Sačuvaj</button>
                        </form>
                    </div>
                </div>
</x-app-layout>
