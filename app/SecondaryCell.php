<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SecondaryCell extends Model
{
    protected $table='secondary_cells';
    protected $fillable=['secondary_cell','user_id'];
    //
    public function user(){
        return $this.belongsTo(User::class,'id','user_id');
    }
}
