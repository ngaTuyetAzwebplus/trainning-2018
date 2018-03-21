@extends('layouts.flat')

@section('content')
<div class="card">
    <div class="card-header font-weight-bold">
            <i class="fas fa-chart-area text-success mr-3"></i> Số sinh viên qua từng năm
    </div>
    <div class="card-body">
            <div id="curve_chart" style="height: 300px"></div>
    </div>

</div>
@endsection