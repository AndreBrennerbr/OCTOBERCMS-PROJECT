<?php namespace October\Demo\Models;

use Model;

/**
 * Pedidos Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Pedidos extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'october_demo_pedidos';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
