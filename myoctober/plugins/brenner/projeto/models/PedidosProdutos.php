<?php namespace Brenner\Projeto\Models;

use Model;

/**
 * PedidosProdutos Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class PedidosProdutos extends Model
{
    use \October\Rain\Database\Traits\Validation;
   
    public $belongsTo = [
        'pedido' => \Brenner\Projeto\Models\Pedido::class,
        'produto' => \Brenner\Projeto\Models\Produto::class
    ];

    /**
     * @var string table name
     */
    public $table = 'brenner_projeto_pedidos_produtos';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
