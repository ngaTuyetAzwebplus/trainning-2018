@extends('layouts.flat')

@section('content')
<div class="container">
    <h3>Nhập điểm sinh viên</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif
    <form method="POST" action="/marks">
        @csrf
        <div class="form-group">
                <label for="exampleFormControlInput1">Tên</label>
                <input type="text" class="form-control bg-white col-3" name="student" type="text" value="{{$student->name}}" readonly="False">
        </div>
        <input name="id" type="hidden" value="{{$student->id}}" readonly="False">
        <div class="form-group">
                <label for="exampleFormControlInput1">Điểm php</label>
                <input  id="php" type="text" name="php" class="form-control col-6" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
                <label for="exampleFormControlInput1">Điểm mySQL</label>
                <input  id="mySQl" type="text" name="mySQl" class="form-control col-6" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
                <label for="exampleFormControlInput1">Điểm Java</label>
                <input  id="java" type="text" name="java" class="form-control col-6" id="exampleFormControlInput1">
        </div>
     
        {{--  <div class="form-group">
               <label for="group"><b>Group</b></label>
               <select name="group" id="group">
                    <option value="">--chon--</option>
                   @foreach($groups as $group)
                   
                       <option value="{{$group->id}}">{{$group->name}}</option>
                   @endforeach
               </select>
        </div>  --}}
      
                <button type="submit" class="btn btn-success">
                        <i class="fas fa-save mr-2"></i>  {{ __('Save') }}
                </button>
            
    </form>
</div>
@endsection