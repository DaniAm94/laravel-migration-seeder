<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $train->agency }}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Da:
            <i>
                {{ $train->starting_station }}
            </i>
        </li>
        <li class="list-group-item">A:
            <i>
                {{ $train->arrival_station }}
            </i>
        </li>
        <li class="list-group-item">Partenza:
            <i>
                {{ $train->departure_time }}
            </i>
        </li>
        <li class="list-group-item">Arrivo:
            <i>
                {{ $train->arrival_time }}
            </i>
        </li>
        <li class="list-group-item">Codice treno:
            <i>
                {{ $train->train_code }}
            </i>
        </li>
        <li class="list-group-item">Vagoni:
            <i>
                {{ $train->wagons_num }}
            </i>
        </li>
        <li class="list-group-item">
            <i>
                {{ $train->getDelay() }}
            </i>
        </li>
        <li class="list-group-item">
            <i>
                @if ($train->deleted == 'SI')
                    <i class="fa-solid fa-circle-xmark text-danger"></i>
                @else
                    <i class="fa-solid fa-circle-check text-success "></i>
                @endif
            </i>
        </li>
    </ul>
</div>
