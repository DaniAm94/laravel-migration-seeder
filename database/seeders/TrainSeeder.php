<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            ['agency' => 'Trenitalia', 'starting_station' => 'Roma Termini', 'arrival_station' => 'Milano Centrale', 'departure_time' => '08:00', 'arrival_time' => '12:00', 'train_code' => 12345678, 'wagons_num' => 10, 'delayed' => True, 'deleted' => 'NO'],
            ['agency' => 'Italo', 'starting_station' => 'Napoli Centrale', 'arrival_station' => 'Firenze Santa Maria Novella', 'departure_time' => '09:30', 'arrival_time' => '12:30', 'train_code' => 87654321, 'wagons_num' => 8, 'delayed' => False, 'deleted' => 'SI'],
            ['agency' => 'Trenitalia', 'starting_station' => 'Venezia Santa Lucia', 'arrival_station' => 'Verona Porta Nuova', 'departure_time' => '10:00', 'arrival_time' => '11:30', 'train_code' => 23456789, 'wagons_num' => 6, 'delayed' => True, 'deleted' => 'NO'],
            ['agency' => 'Italo', 'starting_station' => 'Torino Porta Nuova', 'arrival_station' => 'Genova Piazza Principe', 'departure_time' => '14:00', 'arrival_time' => '16:00', 'train_code' => 98765432, 'wagons_num' => 12, 'delayed' => False, 'deleted' => 'SI'],
            ['agency' => 'Trenitalia', 'starting_station' => 'Bologna Centrale', 'arrival_station' => 'Rimini', 'departure_time' => '15:30', 'arrival_time' => '17:00', 'train_code' => 34567891, 'wagons_num' => 15, 'delayed' => True, 'deleted' => 'NO'],
            ['agency' => 'Italo', 'starting_station' => 'Firenze Santa Maria Novella', 'arrival_station' => 'Pisa Centrale', 'departure_time' => '16:00', 'arrival_time' => '17:00', 'train_code' => 19876543, 'wagons_num' => 5, 'delayed' => False, 'deleted' => 'SI'],
            ['agency' => 'Trenitalia', 'starting_station' => 'Milano Centrale', 'arrival_station' => 'Bergamo', 'departure_time' => '18:00', 'arrival_time' => '19:00', 'train_code' => 45678912, 'wagons_num' => 7, 'delayed' => True, 'deleted' => 'NO'],
            ['agency' => 'Italo', 'starting_station' => 'Roma Termini', 'arrival_station' => 'Napoli Centrale', 'departure_time' => '20:00', 'arrival_time' => '21:30', 'train_code' => 21987654, 'wagons_num' => 9, 'delayed' => False, 'deleted' => 'SI'],
            ['agency' => 'Trenitalia', 'starting_station' => 'Verona Porta Nuova', 'arrival_station' => 'Venezia Santa Lucia', 'departure_time' => '22:00', 'arrival_time' => '23:30', 'train_code' => 56789123, 'wagons_num' => 11, 'delayed' => True, 'deleted' => 'NO'],
            ['agency' => 'Italo', 'starting_station' => 'Genova Piazza Principe', 'arrival_station' => 'Torino Porta Nuova', 'departure_time' => '23:30', 'arrival_time' => '01:00', 'train_code' => 32198765, 'wagons_num' => 13, 'delayed' => False, 'deleted' => 'SI']
        ];

        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->fill($train);
            $new_train->save();
        }
    }
}
