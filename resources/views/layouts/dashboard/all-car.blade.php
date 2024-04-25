@extends('layouts.dashboard.app')

@section('dashboard-content-item')
    @foreach ($cars as $car)
        @includeIf('layouts.car', ['car' => $car])
    @endforeach
@endsection
