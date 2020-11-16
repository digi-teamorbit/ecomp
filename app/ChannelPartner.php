<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChannelPartner extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'channel_partners';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['image'];

    
}
