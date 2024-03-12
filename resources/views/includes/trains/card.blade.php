<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $train['agency'] }}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $train['starting_station'] }}</li>
        <li class="list-group-item">{{ $train['arrival_station'] }}</li>
        <li class="list-group-item">{{ $train['departure_time'] }}</li>
        <li class="list-group-item">{{ $train['arrival_time'] }}</li>
        <li class="list-group-item">{{ $train['train_code'] }}</li>
        <li class="list-group-item">{{ $train['wagons_num'] }}</li>
        <li class="list-group-item">{{ $train['delayed'] }}</li>
        <li class="list-group-item">{{ $train['deleted'] }}</li>
    </ul>
    <div class="card-body">
    </div>
</div>
