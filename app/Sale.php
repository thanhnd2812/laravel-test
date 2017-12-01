<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded = [];

    public function scopeFilter($query, $filters) {
        foreach ($filters as $key => $value) {

            if (is_null($value)) {
                continue;
            }
            if ($key === 'min_price') {

                $query->where('price', '>=' , $value);

            } else if ($key === 'max_price') {

                $query->where('price', '<=' , $value);

            } else {
                $query->where($key, $value);
            }
        }
        return $query;
    }
}
