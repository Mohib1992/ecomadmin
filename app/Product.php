<?php

namespace App;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Vanilo\Category\Traits\HasTaxons;
use Vanilo\Channel\Traits\Channelable;
use Vanilo\Contracts\Buyable;
use Vanilo\Properties\Traits\HasPropertyValues;
use Vanilo\Support\Traits\BuyableModel;
use Vanilo\Support\Traits\HasImagesFromMediaLibrary;
use Vanilo\Product\Models\Product as BaseProduct;

class Product extends BaseProduct implements HasMedia, Buyable
{
    use Channelable, HasTaxons, InteractsWithMedia, BuyableModel, HasPropertyValues, HasImagesFromMediaLibrary;

    protected $guarded = [];

    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    public function getBuyableDescription($options = null)
    {
        return $this->name;
    }

    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }
}
