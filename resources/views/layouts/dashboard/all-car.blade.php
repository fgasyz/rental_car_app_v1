@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    <div class="col-sm-12">

    </div>

    @foreach ($cars as $car)
        @includeIf('layouts.car', ['car' => $car])
    @endforeach
@endsection
