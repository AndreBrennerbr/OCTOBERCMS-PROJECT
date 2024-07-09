<?php namespace October\Demo\Models;

use Model;

/**
 * Clientes Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Clientes extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'october_demo_clientes';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
