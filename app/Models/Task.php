<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'created_at', 'updated_at'];

    public function getCreatedAtFormattedAttribute()
    {
        return Carbon::parse($this->created_at)
            ->setTimezone('Asia/Tokyo')
            ->format('Y年n月j日 G:i');
    }

    public function getUpdatedAtFormattedAttribute()
    {
        return Carbon::parse($this->updated_at)
            ->setTimezone('Asia/Tokyo')
            ->format('Y年n月j日 G:i');
    }
}