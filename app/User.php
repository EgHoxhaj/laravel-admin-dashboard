<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string name
 * @property string first_name
 * @property string last_name
 * @property string email
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNameAttribute(): string
    {
        $first_name = $this->first_name;
        $last_name = $this->last_name;

        if (!$last_name) {
            return $first_name;
        }

        return $first_name . ' ' . $last_name;
    }

    public function setNameAttribute($name): void
    {
        [$first_name, $last_name] = explode(' ', $name);

        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
}
