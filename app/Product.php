<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function orderItems() {
        return $this->hasMany('App\OrderItem');
    }

    public function WishLists() {
        return $this->hasMany('App\WishList');
    }
}
