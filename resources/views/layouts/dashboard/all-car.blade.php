@extends('layouts.dashboard.app')

@section('dashboard-content-item')

    @if (count($cars) > 0)
        @foreach ($cars as $car)
            @includeIf('layouts.car', ['car' => $car])
        @endforeach
    @else
        <h5 class="align-middle">Data mobil kosong</h5>
    @endif

@endsection
