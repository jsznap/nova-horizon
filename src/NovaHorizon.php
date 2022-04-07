<?php namespace GeneaLabs\NovaHorizon;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Laravel\Nova\Menu\MenuSection;


class NovaHorizon extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-horizon', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-horizon', __DIR__.'/../dist/css/tool.css');
    }

    /**
    * Build the menu that renders the navigation links for the tool.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return mixed
    */
    public function menu(Request $request)
    {
        return MenuSection::make('Nova Horizon')
            ->path('/nova-horizon')
            ->icon('server');
    }
}
