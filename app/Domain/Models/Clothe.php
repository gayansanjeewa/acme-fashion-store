<?php

namespace Domain\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
class Clothe extends Model
{
    protected $fillable = ['name', 'product_code', 'cost', 'selling_price', 'brand_id', 'color', 'size', 'short_description'];

}
