<?php 

class Category extends Eloquent {

    protected $table = 'categories';
    protected $fillable = [];

    public function products() {
        return $this->hasMany('Product');
    }
}