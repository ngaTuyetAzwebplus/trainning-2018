@extends('layouts.flat')

@section('content')
<div class="container">
    <h3>Sửa lớp</h3>
<form method="POST" action="/groups/{{$group->id}}">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
                <label for="">Tên lớp:</label>
                <input type="text" name="name" class="form-control col-4" id="name"  value="{{$group->name}}"  placeholder="Enter name">
        </div>
        <div class="form-group">
                <label for="">Năm thành lập:</label>
                <input type="text" name="year" class="form-control col-6" id="year" placeholder="Enter year" value="{{$group->year}}">
        </div>
       
      
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection