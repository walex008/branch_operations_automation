<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
      'head_office_id', 'zone_id',
      'name', 'opening_date',
      'description', 'is_system','created_by'
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function head_office()
    {
        return $this->belongsTo(HeadOffice::class, 'head_office_id');
    }
}
