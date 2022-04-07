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
                <form method="POST" action="{{ route('admin.companies.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                    
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-9">

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Ime poslodavca / kompanije</label>
                                    <input type="text" id="name" name="name" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                                </div>

                                <div class="col-span-6 sm:col-span-2 overflow-hidden">
                                    <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                                    <input type="file" id="logo" name="logo" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="website" class="block text-sm font-medium text-gray-700">Web stranica firme </label>
                                    <input type="url" id="website" name="website" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="URL mora sadržati http ili https">
                                </div>

                                <div class="col-span-6">
                                    <label for="about" class="block text-sm leading-5 font-medium text-gray-700 mb-4">
										Opis - Upišite tekst
            						</label>
            						<textarea id="mytextarea" name="description" rows="20"></textarea>
                                </div>

                                 <div class="col-span-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefon</label>
                                    <input type="text" id="phone" name="phone" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>

                                 <div class="col-span-2">
                                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                                    <input type="email" id="name" name="email" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-2">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Adresa (Grad, Ulica)</label>
                                    <input type="text" id="address" name="address" class="form-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
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
                                        <label class="form-label" for="exampleInputText1">Ime poslodavca / kompanije</label>
                                        <input name="name" type="text" class="form-control" id="exampleInputText1">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input type="file" id="logo" name="logo">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="website">Web stranica firme </label>
                                        <input type="url" id="website" name="website" placeholder="URL mora sadržati http ili https">
                                    
                                    </div>
                                </div>

                            </div>

                            <hr class="my-4">

                            <div class="form-group">
                                <label for="about">
                                    Opis - Upišite tekst
                                </label>
                                <textarea id="mytextarea" name="description" rows="20"></textarea>
                            </div>


                            <hr class="my-4">

                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label for="phone">Telefon</label>
                                        <input type="text" id="phone" name="phone">    
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
