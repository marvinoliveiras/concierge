<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Resident extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'idHabitation',
        'idResidentProfile',
        'email',
        'phone'
    ];
    public function residentProfile()
    {
        return $this->belongsTo(
            ResidentProfile::class
        );
    }
    public function access()
    {
        return $this->hasMany(
            Access::class
        );
    }
}
