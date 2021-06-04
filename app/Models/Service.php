<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'localization',
        'idKindOfService',
        'serviceDescription',
        'status',
        'deadline',
        'idUser',
        'idResident'
    ];
    public function kindOfService()
    {
        return $this->belongsTo(
            KindOfService::class
        );
    }
}