<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PrayerUser extends Pivot
{
    use HasFactory;

    protected $table = 'prayer_user';
}
