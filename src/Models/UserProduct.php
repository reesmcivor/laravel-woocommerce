<?php

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Facades\Query;
use Codexshaper\WooCommerce\Traits\QueryBuilderTrait;

class UserProduct extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint = 'user_products';

}
