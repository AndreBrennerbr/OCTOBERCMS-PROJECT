<?php namespace Brenner\Projeto;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'projeto',
            'description' => 'No description provided yet...',
            'author' => 'Brenner',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Brenner\Projeto\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'brenner.projeto.some_permission' => [
                'tab' => 'projeto',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        //return []; // Remove this line to activate

        return [
            'Clientes' => [
                'label' => 'Clientes',
                'url' => Backend::url('brenner/projeto/cliente'),
                'icon' => 'icon-leaf',
                'permissions' => ['brenner.projeto.*'],
                'order' => 500,
            ],
            'Produtos' => [
                'label' => 'Produtos',
                'url' => Backend::url('brenner/projeto/produto'),
                'icon' => 'icon-leaf',
                'permissions' => ['brenner.projeto.*'],
                'order' => 500,
            ],
            'Pedido' => [
                'label' => 'Pedido',
                'url' => Backend::url('brenner/projeto/pedido'),
                'icon' => 'icon-leaf',
                'permissions' => ['brenner.projeto.*'],
                'order' => 500,
            ],
        ];
    }
}
