@extends('layouts.flat')

@section('content')
<div class="container">
    <h1>Thêm mới sinh viên</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif
    <form method="POST" action="/students">
        @csrf
        <div class="form-group">
                <label for="exampleFormControlInput1">Nhập tên:</label>
                <input type="text"  name="name" id="name" class="form-control col-6" id="exampleFormControlInput1" placeholder="Nhập tên">
        </div>
        <div class="form-group">
                <label for="exampleFormControlInput1">Nhập tuổi:</label>
                <input type="text"  name="age" id="age" class="form-control col-4" id="exampleFormControlInput1" placeholder="Nhập tuổi">
        </div>
        <div class="form-group">
                <label for="exampleFormControlSelect1">Lớp</label>
                <select name="group" id="group" class="form-control col-4" id="exampleFormControlSelect1">
                        <option value="">--Chọn--</option>
                        @foreach($groups as $group)
                        
                            <option value="{{$group->id}}">{{$group->name}}</option>
                        @endforeach
                </select>
              </div>
        
                <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> {{ __('Save') }}
                </button>
        
    </form>
</div>
@endsection