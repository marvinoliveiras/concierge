<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Access extends Model
{
    use HasFactory;
    private $fillable = [
        'idHabitation',
        'idResident',
        'licensePlate',
        'idUser',
        'notes'
    ];
    public function habitation()
    {
        return $this->belongsTo(
            Habitation::class
        );
    }
    public function resident()
    {
        return $this->belongsTo(
            Resident::class
        );
    }
    public function user()
    {
        return $this->belongsTo(
            User::class
        );
    }
}