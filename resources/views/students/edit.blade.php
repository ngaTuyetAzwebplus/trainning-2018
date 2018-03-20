@extends('layouts.flat')

@section('content')
<div class="container">
    <h1>Sửa thông tin sinh viên</h1>
<form method="POST" action="/students/{{$student->id}}">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input id="name" type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="nhập tên " value="{{$student->name}}">
        </div>
        <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input  id="age" type="text" name="age" class="form-control" id="exampleFormControlInput1" placeholder="nhập tên " value="{{$student->age}}">
        </div>
      
        <div class="form-group">
               <label for="group">Group</label>
               <select class="form-control" name="group" id="group">
               @foreach($groups as $group)
                    @if($group->id == $student->group->id)
                       <option  value="{{$group->id}}" selected >{{$group->name}}</option>
                    @else
                       <option  value="{{$group->id}}">{{$group->name}}</option>
                       @endif
                @endforeach
               
               </select>
        </div>
        <button type="submit" class="btn btn-success">
                <i class="fas fa-save mr-2"></i>    {{ __('Save') }}
        </button>
    </form>
</div>
@endsection