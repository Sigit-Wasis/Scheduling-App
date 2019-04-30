@extends('Layouts/master')
@section('content')
<section id="main-content">
<section class="wrapper site-min-height">

<div class="col-lg-12">
    @if(session('success'))

    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div> 
    @endif

    <div class="row mt-3">

        <div class="col-6"><h1>Data Edit Class</h1></div>
        <div class="col-6">
        <div class="form-panel">
            <form action="/class/{{$class->id}}/update" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">Name Class</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter name class" value="{{ $class->name }}">
                    </div>

                    <div class="form-group">
                        <label for="grade">Grade</label>
                        <input name="grade" type="text" class="form-control" id="grade" placeholder="Enter name grade" value="{{ $class->grade }}">
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" class="form-control">
                            <option value="Putra" @if($class->type == "Putra") selected @endif>Putra</option>
                            <option value="Putri" @if($class->type == "Putri") selected @endif>Putri</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/class" class="btn btn-danger">Cancel</a>
            </form>
            </div>
        </div>
    </div>

    </div>
</section>
</section>
@endsection
