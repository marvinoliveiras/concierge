<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class KindOfService extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];
    public function service()
    {
        return $this->hasMany(
            Service::class
        );
    }
}