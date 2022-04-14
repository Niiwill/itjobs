
<x-app-layout>
    <div class="conatiner-fluid content-inner mt-4 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Novi Tag</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.tags.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="form-group">
                                    <label class="form-label" for="exampleInputText1">Naziv taga</label>
                                    <input name="name"  type="text" class="form-control" id="exampleInputText1" >
                                </div>

                                <div class="form-group">
                                    <label for="customFile1" class="form-label custom-file-input">Ikona</label>
                                    <input class="form-control" type="file" name="icon" id="customFile1">
                                </div>
                            </div>
         
                            <button type="submit" class="btn btn-primary mt-4">Sačuvaj</button>
                        </form>
                    </div>
                </div>
</x-app-layout>

