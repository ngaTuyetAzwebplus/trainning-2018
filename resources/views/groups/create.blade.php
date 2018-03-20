@extends('layouts.flat')

@section('content')
<div class="container">
    <h3>Thêm mới lớp</h3>
    <form method="POST" action="/groups">
        @csrf
        <div class="form-group">
                <label for="">Tên lớp:</label>
                <input type="text" name="name" class="form-control col-4" id="name"  placeholder="Enter name">
        </div>
        <div class="form-group">
                <label for="">Năm thành lập:</label>
                <input type="text" name="year" class="form-control col-6" id="year" placeholder="Enter year">
        </div>
       
                <button type="submit" class="btn btn-success">
                        <i class="fas fa-save mr-2"></i>  {{ __('Save') }}
                </button>
           
    </form>
</div>
@endsection