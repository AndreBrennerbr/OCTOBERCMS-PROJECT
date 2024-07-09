<?php namespace Brenner\Projeto\Models;

use Model;

/**
 * Produto Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Produto extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $hasMany = [
        'pedidos_produtos' => \Brenner\Projeto\Models\PedidosProdutos::class
    ];

    /**
     * @var string table name
     */
    public $table = 'brenner_projeto_produtos';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
