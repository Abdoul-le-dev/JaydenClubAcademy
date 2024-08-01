<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Musonza\Chat\Traits\Messageable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    use Messageable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'role',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'last_checked_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's role as a string.
     *
     * @return string
     */
    public function getRole()
    {
        switch ($this->role) {
            case 1:
                return 'Joueur';
            case 2:
                return 'Entraineur';
            case 3:
                return 'Admin';
            case 0:
                return 'Anonyme';
            default:
                return 'Inconnu';
        }
    }
}
