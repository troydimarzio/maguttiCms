<?php namespace App;

use App\maguttiCms\Domain\Store\CartPresenter;
use Illuminate\Database\Eloquent\Model;

use \App\maguttiCms\Translatable\GFTranslatableHelperTrait;

class Cart extends Model
{

    use CartPresenter;
    protected $fillable = ['user_id', 'status'];
    protected $fieldspec = [];

    public $sluggable = [];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function cart_items()
	{
		return $this->hasMany('App\CartItem');
	}

	public function order()
	{
		return $this->hasOne('App\Order');
	}

    /*
    |--------------------------------------------------------------------------
    |  Fieldspec
    |--------------------------------------------------------------------------
    */
    function getFieldSpec()
    {
        return $this->fieldspec;
    }
}
