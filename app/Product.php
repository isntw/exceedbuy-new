<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Image;

class Product extends Model {

    use SoftDeletes;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The table name of the model
     *
     * @var String
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'summary',
        'amazon',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * The inputs that should be taken from requests at store and update.
     *
     * @var array
     */
    static $REQUEST_INPUTS = [
        'name',
        'price',
        'summary',
        'amazon',
        'description',
    ];

    public function images() {
        return $this->hasMany(Image::class, 'product');
    }

    public function getDescriptionAttribute() {
        return json_decode($this->attributes['description']);
    }

}
