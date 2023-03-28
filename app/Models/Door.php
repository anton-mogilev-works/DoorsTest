<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    use HasFactory;

    public function dyeing()
    {
        return $this->belongsTo(Dyeing::class, 'dyeing_id');
    }

    public function skin()
    {
        return $this->belongsTo(Skin::class, 'skin_id');
    }

    public function knob()
    {
        return $this->belongsTo(Knob::class, 'knob_id');
    }

    public function openingSide()
    {
        return $this->belongsTo(OpeningSide::class, 'opening_side_id');
    }

    public function widthDimension()
    {
        return $this->belongsTo(WidthDimension::class, 'width_dimension_id');
    }

    public function heightDimension()
    {
        return $this->belongsTo(HeightDimension::class, 'height_dimension_id');
    }

    public function accessories()
    {
        return $this->belongsToMany(Accessory::class, 'door_accessory', 'door_id', 'accessory_id');
    }
}
