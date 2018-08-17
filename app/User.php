<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'job_title',
        'phone_country_code',
        'phone_number',
        'two_factor_options',
        'integration_id',
        'gateway',
        'card_brand',
        'card_last_four',
        'trial_ends_at',
        'payment_method_token',
        'created_by',
        'updated_by',
        'deleted_at',
        'created_at',
        'updated_at',
        'notification_preferences',
        'reward_points',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Surveys to the User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }
}
