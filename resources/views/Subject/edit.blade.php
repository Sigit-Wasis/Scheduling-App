@extends('Layouts.master')
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
        
        <div class="col-6">
            <h1>Data Edit Subject</h1>
        </div>
        
        <div class="col-6">
            <div class="form-panel">
                <form action="/subject/{{ $subject->id }}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Enter subject" value=" {{ $subject->subject }}">
                </div>

                <div class="form-group">
                    <label for="code">Code</label>
                    <input name="code" type="text" class="form-control" id="code" placeholder="Enter code" value="{{ $subject->code }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/subject" class="btn btn-danger">Cancel</a>
                </div>
                </form>
            </div>
        </div>

    </div>

</div>

</section>
</section>

@endsection


