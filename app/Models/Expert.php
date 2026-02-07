<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expert extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomExp', 
        'prenomExp', 
        'telExp', 
        'specialiteExp', 
        'emailExp'
    ];

    /**
     * An Expert can be assigned to many Events.
     */
    public function evenements()
    {
        return $this->hasMany(Evenement::class, 'expert_id');
    }
}