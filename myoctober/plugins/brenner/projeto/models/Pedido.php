<?php namespace Brenner\Projeto\Models;

use Model;

/**
 * Pedidos Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Pedido extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $belongsTo = [
        'cliente' => \Brenner\Projeto\Models\Cliente::class,
    ];

    public $hasMany = [
        'pedidos_produtos' => \Brenner\Projeto\Models\PedidosProdutos::class
    ];

    /**
     * @var string table name
     */
    public $table = 'brenner_projeto_pedidos';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
