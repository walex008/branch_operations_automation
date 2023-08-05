<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = [
      'head_office_id',
      'name',
      'address',
      'opening_date',
      'status',
      'description',
      'created_by',
      'is_system'
    ];

    public function head_office(){
        return $this->belongsTo(HeadOffice::class, 'head_office_id');
    }
}
