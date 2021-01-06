<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function prayers()
    {
        return $this->belongsToMany(Prayer::class)->withPivot(['day_arrangement', 'status', 'month']);
    }

    /**
     * User::findOrFail(auth()->user()->id)->prayers()
     *      ->wherePivot('day_arrangement', $day_arrangement)
     *      ->wherePivot('month', $month)
     *
     * @param $query
     * @param mixed ...$arr = [$arg=['column_name' => name, 'column_value'=> value], $arg2, $arg3...]
     *
     * @return User
     */
    public function scopeUserWherePivot($query, ...$arr)
    {
        $data =  $query->find(auth()->user()->id)->prayers();

        foreach($arr as $arg) $data->wherePivot($arg['column_name'], $arg['column_value']);

        return $data;
    }

}
