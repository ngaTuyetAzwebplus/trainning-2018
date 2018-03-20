@extends('layouts.flat')

@section('content')
<div class="container">
    <h1>Nhap diem sinh vien</h1>
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
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Ten</label>

            <div class="col-md-6">
            <input name="student" type="text" value="{{$student->name}}" readonly="False"> 
            </div>
        </div>
        <input name="id" type="hidden" value="{{$student->id}}" readonly="False">
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">php</label>

            <div class="col-md-6">
                <input id="php" type="text" name="php">
            </div>
        </div>
        <div class="form-group row">
            <label for="mySQl" class="col-md-4 col-form-label text-md-right">Sql</label>

            <div class="col-md-6">
                <input id="mySQl" type="text" name="mySQl">
            </div>
        </div>
        <div class="form-group row">
            <label for="java" class="col-md-4 col-form-label text-md-right">java</label>

            <div class="col-md-6">
                <input id="java" type="text" name="java">
            </div>
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