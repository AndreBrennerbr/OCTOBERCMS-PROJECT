<?php namespace Brenner\Projeto\Models;

use Model;

/**
 * Cliente Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Cliente extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $hasMany = [
        'pedido' => \Brenner\Projeto\Models\Pedido::class
    ];


    /**
     * @var string table name
     */
    public $table = 'brenner_projeto_clientes';

    /**
     * @var array rules for validation
     */
    public $rules = [];

   
}
