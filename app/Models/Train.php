<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    public function getDelay()
    {
        $delay_message = $this->delayed ? 'In ritardo' : 'In orario';
        return $delay_message;
    }
}
