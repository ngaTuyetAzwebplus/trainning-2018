@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Them moi sinh vien</h1>
<form method="POST" action="/students/{{$student->id}}">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Ten</label>

            <div class="col-md-6">
            <input id="name" type="text" name="name" value="{{$student->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Tuoi</label>

            <div class="col-md-6">
                <input id="name" type="text" name="age" value="{{$student->age}}">
            </div>
        </div>
        <div class="form-group">
               <label for="group"><b>Group</b></label>
               <select name="group" id="group">
               @foreach($groups as $group)
                    @if($group->id == $student->group->id)
                       <option  value="{{$group->id}}" selected >{{$group->name}}</option>
                    @else
                       <option  value="{{$group->id}}">{{$group->name}}</option>
                       @endif
                @endforeach
               
               </select>
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