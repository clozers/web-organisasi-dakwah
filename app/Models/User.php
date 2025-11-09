<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'alamat',
        'foto',
        'kampus',
        'nm_institusi',
        'institusi_id',
        'no_tlp',
        'role',
        'password',
        'city_of_practice',
        'institution_of_practice',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // Hanya role admin yang boleh masuk panel admin
        return in_array($this->role, ['admin', 'ketua', 'wakil_ketua', 'sekretaris', 'bendahara']);
    }

    public function institusi()
    {
        return $this->belongsTo(\App\Models\Institusi::class, 'institusi_id', 'id_institusi');
    }
}
