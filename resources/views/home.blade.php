@extends('layouts.main')

@section('main-content')
    <div class="container-sm">

        <ul class="row list-unstyled text-center">
            @forelse ($trains as $train)
                <li class="col-4">
                    @include('includes.trains.card')
                </li>
            @empty
                <li class="col-12">
                    <h4>Non ci sono treni</h4>
                </li>
            @endforelse
        </ul>
    </div>
@endsection
