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
            <h1>Data Edit Teacher</h1>
         </div>
         
         <div class="col-6">
            <div class="form-panel">
               <form action="/teacher/{{$teacher->id}}/update" method="post">
                  @csrf
                  {{-- @method('PATCH') --}}
                  {{method_field('PATCH')}}
               
               <div class="form-group">
                  <label for="code">Code</label>
                  <input type="text" name="code" class="form-control" value="{{$teacher->code}}">
                  @if ($errors->has('code'))
                  <b class="alert-danger">
                     <strong>{{ $errors->first('code')}}</strong> <br>
                  </b>
                  @endif
               </div>
         
               <div class="form-group">
                  <label for="name_id">Name_id</label>
                  <input type="text" name="name_id" class="form-control" value="{{$teacher->name_id}}">
                  @if ($errors->has('name_id'))
                  <b class="alert-danger">
                     <strong>{{ $errors->first('name_id')}}</strong> <br>
                  </b>
                  @endif
               </div>
         
               <div class="form-group">
                  <label for="name_ar">Name_ar</label>
                  <input type="text" name="name_ar" class="form-control" value="{{$teacher->name_ar}}">
                  @if ($errors->has('name_ar'))
                  <b class="alert-danger">
                     <strong>{{ $errors->first('name_ar')}}</strong> <br>
                  </b>
                  @endif
               </div>
         
               <div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="text" name="nip" class="form-control" value="{{$teacher->nip}}">
                  @if ($errors->has('nip'))
                  <b class="alert-danger">
                     <strong>{{ $errors->first('nip')}}</strong> <br>
                  </b>
                  @endif
               </div>

               <div class="form-group">
                  <label for="gender">Gender</label>
                  <select name="gender" class="form-control">
                    <option value="laki-laki" @if($teacher->gender == "laki-laki") selected @endif>laki-laki</option>
                    <option value="perempuan" @if($teacher->gender == "perempuan") selected @endif>perempuan</option>
                  </select>
                  @if ($errors->has('gender'))
                  <b class="alert-danger">
                    <strong>{{ $errors->first('gender')}}</strong> <br>
                  </b>
                  @endif
               </div>

               <input class="btn btn-primary" type="submit" name="submit" value="Submit">
               <a href="/teacher" class="btn btn-danger">Batal</a>
            </form>
         </div>
      </div>

   </div>
</div>
</section>
</section>
@endsection
