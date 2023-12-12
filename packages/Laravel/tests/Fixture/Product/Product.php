<?php

declare(strict_types=1);

namespace Test\Ecotone\Laravel\Fixture\Product;

use Illuminate\Database\Eloquent\Model;

final class Product extends Model
{
    public $fillable = ['id', 'name', 'price_amount', 'price_currency'];

}
