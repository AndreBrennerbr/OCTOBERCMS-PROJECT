<?php namespace October\Demo\Models;

use Model;

/**
 * Produtos Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Produtos extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'october_demo_produtos';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
