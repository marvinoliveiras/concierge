<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'idHabitation',
        'idTypeOfVehicle',
        'licensePlate',
        'notes'
    ];
    public function habitation()
    {
        return $this->belongsTo(
            Habitation::class
        );
    }
    public function typeOfVehicle()
    {
        return $this->belongsTo(
            TypeOfVehicle::class
        );
    }
}