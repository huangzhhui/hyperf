<?php

declare (strict_types=1);
namespace Hyperf\Casbin\Db;

use Hyperf\DbConnection\Model\Model;

/**
 * @property int $id 
 * @property string $ptype 
 * @property string $v0 
 * @property string $v1 
 * @property string $v2 
 * @property string $v3 
 * @property string $v4 
 * @property string $v5 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Rule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rules';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ptype', 'v0', 'v1', 'v2', 'v3', 'v4', 'v5'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'int', 'created_at' => 'datetime', 'updated_at' => 'datetime'];

    public function toArray(): array
    {
        $array = parent::toArray();
        $unset = false;
        foreach ($array as $key => $value) {
            if (! $value) {
                $unset = true;
            }
            if ($unset) {
                unset($array[$key]);
            }
        }
        return $array;
    }

}