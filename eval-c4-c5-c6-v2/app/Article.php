<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Eloquent
{
    /**
    * The table associated with the model
    *
    *@var string
    */
    protected $filliable = ['name', 'category_id', 'unit_id', 'sales_prices'];

    



}
