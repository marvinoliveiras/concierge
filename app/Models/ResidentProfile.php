<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ResidentProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function resident()
    {
        return $this->hasMany(
            Resident::class
        );
    }
}