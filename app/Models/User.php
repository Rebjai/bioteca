<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Catalogs\Assistant;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    static $rules = [
        'name' => ['required', 'string'],
        'first_surname' => ['required', 'string'],
        'second_surname' => ['required', 'string'],
        'email' => ['required', 'string'],
        'role' => ['required', 'integer'],
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'first_surname',
        'second_surname',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that should be appended.
     *
     * @var array<string, string>
     */
    protected $appends = [
        'role_name',
        'fullname',
        // 'profile',
    ];

    /**
     * Attribute getter.
     *
     * 
     */
    public function roleName(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $this->getRoleName($this->role),
            // set: fn ($value) => $value,
        );
    }
    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn ($value, $atrrs) => "$this->name $this->first_surname $this->second_surname",
            set: fn ($value) => $value,
        );
    }

/**
     * Attribute getter.
     *
     * * @param int role_id Description
     * 
     */
    public function getRoleName(int $role_id = 0)
    {
        if ($role_id == 0) {
            return 'No Role';
        }
        if ($role_id == 1) {
            return 'Assistant';
        }
        if ($role_id == 2) {
            return 'Supervisor';
        }
        if ($role_id == 10) {
            return 'Admin';
        }
    }

    public function profile(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $this->getProfile($this->role),
            set: fn ($value) => $value,
        );
    }
    /**
     * Attribute getter.
     *
     * * @param int role_id Description
     * 
     */
    public function getProfile(int $role_id = 0)
    {
        if ($role_id == 0) {
            return 'No Role';
        }
        if ($role_id == 1) {
            return Assistant::where('user_id', '=', $this->id)->first();
        }
        if ($role_id == 10) {
            return 'Admin';
        }
    }
}
