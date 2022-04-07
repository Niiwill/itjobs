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
                                        <select name="type_id" class="form-select" id="exampleFormControlSelect1">
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
                                        <select name="company_id" class="form-select" id="exampleFormControlSelect1">
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
                                        <select name='category_id' class="form-select" id="exampleFormControlSelect1">
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
                                        <select name="level_id" class="form-select" id="exampleFormControlSelect1">
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
                                <input name="title" type="text" class="form-control" id="exampleInputText1">
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
                                            <option selected="" disabled="">Izaberi</option>
                                            @foreach ($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputdate">Date Input</label>
                                        <input name="expired_at" type="date" class="form-control" id="exampleInputdate" value="2022-01-31">
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
