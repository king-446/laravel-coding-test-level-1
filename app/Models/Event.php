<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\uuid;

class Event extends Model
{
    use HasFactory;
    use uuid;
}
