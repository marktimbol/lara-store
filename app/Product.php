<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model  {


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['category_id', 'sku', 'name', 'description', 'price', 'isAvailable', 'image'];


	public function user() {
		return $this->belongsToMany('App\User', 'user_cart');
	}

}
