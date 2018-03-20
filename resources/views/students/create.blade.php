@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Them moi sinh vien</h1>
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
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Ten</label>

            <div class="col-md-6">
                <input id="name" type="text" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Tuoi</label>

            <div class="col-md-6">
                <input id="name" type="text" name="age">
            </div>
        </div>
        <div class="form-group">
               <label for="group"><b>Group</b></label>
               <select name="group" id="group">
                    <option value="">--chon--</option>
                   @foreach($groups as $group)
                   
                       <option value="{{$group->id}}">{{$group->name}}</option>
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