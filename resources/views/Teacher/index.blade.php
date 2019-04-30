@extends('Layouts.master')
@section('content')

<section id="main-content">
<section class="wrapper site-min-height">

<div class="col-lg-12">
    <div class="row mt-3">
        <div class="col-6"><h1>Data Teacher</h1></div>
        <div class="col-6">
            <button type="button" class="btn btn-primary btn-sm mb" data-toggle="modal" data-target="#exampleModal">Add Data Teacher</button>
        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session('success')}}
        </div> 
        @endif  

        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach            
                </ul>
            </div> 
        @endif

        <div class="content-panel">
            <table class="table table-hover" id="teacher-table">
                <thead>
                    
                    <tr>
                        <th>code</th>
                        <th>Name Indonesia</th>
                        <th>Name arab</th>
                        <th>Nip</th>
                        <th>Jenis Kelamin</th>
                        <th width="130px">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<!-- Modal Add-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="true">
                ×
                </button>
                <h4 class="modal-title" id="modalDeleteLabel">Add Data</h4>
            </div>

            <div class="modal-body">
            <form action="/teacher/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" name="code" placeholder="Enter code teacher" value="{{ old('code') }}">
                </div>

                <div class="form-group">
                    <label for="name_id">Name_id</label>
                    <input type="text" class="form-control" name="name_id" placeholder="Enter name indonesia" value="{{ old('name_id') }}">
                </div>

                <div class="form-group">
                    <label for="name_ar">Name_ar</label>
                    <input type="text" class="form-control" name="name_ar" placeholder="Enter name arab" value="{{ old('name_ar') }}">
                </div>

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" name="nip" placeholder="Enter nip" value="{{ old('nip') }}">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender">
                        <option value="">--- Pilih Gender ---</option>
                        <option value="laki-laki" @if (old('gender') == "laki-laki") {{ 'selected' }} @endif>laki-laki</option>
                        <option value="perempuan" @if (old('gender') == "perempuan") {{ 'selected' }} @endif>perempuan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Add-->
</div>

<!-- Modal Delete-->
@foreach ($teachers as $key => $teacher)
<div class="modal fade in" id="modalDelete{{$teacher->id}}" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="true">
                ×
                </button>
                <h4 class="modal-title" id="modalDeleteLabel">Warning</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure delete data teacher , {{$teacher->name_id}}</p>
            </div>
            
            <div class="modal-footer">
                <a href="/teacher/{{$teacher->id}}/delete" class="btn btn-primary">Delete</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal -->
</section>
</section>

@stop

@push('scripts')
<script>
$(function() {
    $('#teacher-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'teacher/json',
        columns: [
            { data: 'code', name: 'code' },
            { data: 'name_id', name: 'name_id' },
            { data: 'name_ar', name: 'name_ar' },
            { data: 'nip', name: 'nip' },
            { data: 'gender', name: 'gender' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});
$.fn.dataTable.ext.errMode = 'throw';
</script>
@endpush