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
    {{-- <div class="col-span-6 sm:col-span-2">
        @if(empty($company->logo_path))
        <!-- Default slika -->
        <img class="rounded-full h-28 w-28 " id="imgPrew" src="https://www.allianceplast.com/wp-content/uploads/2017/11/no-image-300x300.png" alt="your image"/>
        @else
        <!-- Korsnikov logo -->
        <img class="rounded-full h-28 w-28" id="imgPrew" src="{{asset('storage/'.$company->logo_path)}}" alt="{{$company->name}} logo"/>
        @endif

    </div> --}}
    <div class="conatiner-fluid content-inner mt-4 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Izmena Kompanije</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.companies.update', $company->id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="exampleInputText1">Ime poslodavca / kompanije</label>
                                        <input name="name" type="text" value="{{$company->name}}" class="form-control" id="exampleInputText1" required>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="logo" class="form-label">Logo</label>
                                        <input type="file" class="form-control" id="logo" name="logo">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="website">Web stranica firme </label>
                                        <input type="url" class="form-control" value="{{$company->website}}" id="website" name="website" placeholder="URL mora sadržati http ili https">
                                    </div>
                                </div>

                            </div>

                            <hr class="my-4">

                            <div class="form-group">
                                <label for="about" class="form-label">Opis - Upišite tekst</label>
                                <textarea id="mytextarea" class="form-control" name="description" rows="10">{{$company->description}}</textarea>
                            </div>


                            <hr class="my-4">

                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Telefon</label>
                                        <input type="text" class="form-control" value="{{$company->phone}}" id="phone" name="phone">    
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control"  value="{{$company->email}}" id="name" name="email" >
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="address" class="form-label">Adresa (Grad, Ulica)</label>
                                        <input type="text" id="address" name="address" value="{{$company->address}}" class="form-control">
                                    </div>
                                </div>
                            </div>
         
                            <button type="submit" class="btn btn-primary mt-4">Sačuvaj</button>
                        </form>
                    </div>
                </div>
</x-app-layout>
