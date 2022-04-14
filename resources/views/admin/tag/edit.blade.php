
<x-app-layout>
    <div class="conatiner-fluid content-inner mt-4 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Izmena Taga</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.tags.update', $tag->id) }}">
                            @method('PATCH')
                            @csrf

                            <div class="row">

                                <div class="form-group">
                                    <label class="form-label" for="exampleInputText1">Naziv taga</label>
                                    <input name="title"  type="text" class="form-control" id="exampleInputText1" value="{{$tag->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="title" class="">Slika</label>
                                    <img width="40" height="40" class="bg-light" src="{{asset('storage/tags/'.$tag->icon)}}" alt="">
                                </div>

                                <div class="form-group">
                                    <label for="customFile1" class="form-label custom-file-input">Nova ikona</label>
                                    <input class="form-control" type="file" name="icon" id="customFile1">
                                </div>
                            </div>
         
                            <button type="submit" class="btn btn-primary mt-4">Sačuvaj</button>
                        </form>
                    </div>
                </div>
</x-app-layout>

