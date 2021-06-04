<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Habitation extends Model
{
    use HasFactory;
    protected $fillable =[
        'address',
        'intercom'
    ];
    public function resident()
    {
        return $this->hasMany(
            Resident::class
        );
    }
    public function vehicle()
    {
        return $this->hasMany(
            Vehicle::class
        );
    }
    public function access()
    {
        return $this->hasMany(
            Access::class
        );
    }
}