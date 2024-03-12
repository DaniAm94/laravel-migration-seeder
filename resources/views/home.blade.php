@extends('layouts.main')

{{-- Fontawesome --}}
@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
        integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='
        crossorigin='anonymous' />
@endsection

@section('main-content')
    <div class="container-sm">

        <ul class="row list-unstyled text-center row-gap-3 ">
            @forelse ($trains as $train)
                <li class="col-3">
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
