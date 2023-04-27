@extends('layout.admin')
@section('content')
@section('add', 'Edit Artikel')
<div class="row">

    {{-- awidjaij --}}
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="form">
                    <div class="form-group">
                        <label for="id_artikel">ID Artikel</label>
                        <input type="number" class="form-control" name="id" id="id" aria-describedby="helpId"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="Tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal"
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="Segmen">Segmen</label>
                        <input type="text" class="form-control" name="segmen" id="segmen"
                            aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- compose --}}
    <div class="col-md-9">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <label for="compose">Edit Artikel</label>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
                        </textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="float-right">
                    <button type="submit" class="btn btn-success text-white"><i class="far fa-envelope"></i> Save</button>
                </div>
                
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div>

</div>
</div>

</div>
</div>
@endsection