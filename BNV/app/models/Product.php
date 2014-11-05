<?php

class Product extends Eloquent {

    protected $table = 'products';
    protected $fillable = [];

    public function category() {
        return $this->belongsTo('Category');
    }
}