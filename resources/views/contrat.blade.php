@extends('layouts.app')
@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">{{ $uncontrat->reference }}</h1>
                <p class="lead mb-0">{{ $uncontrat->description }}</p>
            </div>
        </div>
    </header>
@endsection
