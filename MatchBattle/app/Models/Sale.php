<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'sales';

    protected $fillable = ['code','type'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'sale_id', 'id');
    }
    
}
