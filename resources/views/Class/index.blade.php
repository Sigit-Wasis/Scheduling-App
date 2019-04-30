@extends('Layouts.master')
@section('content')
<section id="main-content">
<section class="wrapper site-min-height">

<div class="col-lg-12">
    <div class="row mt-3">
        <div class="col-6"><h1>Data List Class</h1></div>
        <div class="col-6">
            <button type="button" class="btn btn-primary btn-sm mb" data-toggle="modal" data-target="#exampleModal">Add Data Class</button>
        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session('success')}}
        </div> 
        @endif  

    <div class="content-panel">
        <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Name Class</th>
                <th>Grade</th>
                <th>Type</th>
                <th>Action</th>
            </tr>

        </thead>
            <?php $no=1;?>
            @foreach($class as $c)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->grade}}</td>
                <td>{{$c->type}}</td>
                <td>
                    <a href="/class/{{$c->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete{{$c->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    </div>

<!-- Modal Add class-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="true">
                ×
                </button>
                <h4 class="modal-title" id="modalDeleteLabel">Add Data Class</h4>
            </div>

            <form action="/class/create" method="post">
            @csrf
            <div class="modal-body">

                <div class="form-group">
                    <label for="name">Name Class</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name class">
                </div>

                <div class="form-group">
                    <label for="grade">Grade</label>
                    <input name="grade" type="text" class="form-control" id="grade" placeholder="Enter name grade">
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" class="form-control">
                        <option value="Putra" selected>Putra</option>
                        <option value="Putri">Putri</option>
                    </select>
                </div>

            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
            </form>
        
        </div>
    </div>
</div>
<!-- End Modal Add-->

<!-- Modal Delete-->
@foreach($class as $c)
<div class="modal fade in" id="modalDelete{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="true">
                ×
                </button>
                <h4 class="modal-title" id="modalDeleteLabel">Warning</h4>
            </div>

            <div class="modal-body">
                <p>Are you sure delete data class , {{$c->name}}</p>
            </div>
            
            <div class="modal-footer">
                <a href="/class/{{$c->id}}/delete" class="btn btn-primary">Delete</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        
        </div>
    </div>
</div>
@endforeach
<!-- End Modal -->
</div>
</section>
</section>
@endsection
