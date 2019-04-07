<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = 'quotations'; //table name
    public $primaryKey = 'id'; //primary key
    public $timestamps = true; //timestamps
}
