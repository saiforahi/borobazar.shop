<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SecondaryCell extends Model
{
    protected $table='secondary_cells';
    protected $fillable=['secondary_cell','primary_cell'];
    //
    public function user_details(){
        return $this.belongsTo(User::class,'cell','primary_cell');
    }
}
