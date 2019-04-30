@extends('Layouts.master')
@section('content')
<section id="main-content">
<section class="wrapper site-min-height">

<div class="col-lg-12">
    <div class="row mt-3">
        <div class="col-6"><h1>Data List Subject</h1></div>
        <div class="col-6">
            <button type="button" class="btn btn-primary btn-sm mb" data-toggle="modal" data-target="#example">Add Data Subject</button>
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
                    <th>Subject</th>
                    <th>Code</th>
                    <th>Action</th>
                </tr>
            </thead> 
                <?php $no=1;?>
                @foreach($subject as $s)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$s->subject}}</td>
                    <td>{{$s->code}}</td>
                    <td>
                        <a href="/subject/{{$s->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete{{$s->id}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

<!-- Modal Add-->
<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="true">
                ×
                </button>
                <h4 class="modal-title" id="modalDeleteLabel">Add Data Subject</h4>
            </div>
            <div class="modal-body">
            <form action="/subject/create" method="POST">
            {{csrf_field()}}

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Enter subject">
                </div>

                <div class="form-group">
                    <label for="code">Code</label>
                    <input name="code" type="text" class="form-control" id="code" placeholder="Enter code">
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
@foreach($subject as $s)
<div class="modal fade" id="modalDelete{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="true">
                ×
                </button>
                <h4 class="modal-title" id="modalDeleteLabel">Warning</h4>
            </div>

            <div class="modal-body">
                <p>Are you sure delete data subject , {{$s->subject}}</p>
            </div>
            
            <div class="modal-footer">
                <a href="/subject/{{$s->id}}/delete" class="btn btn-primary">Delete</a>
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