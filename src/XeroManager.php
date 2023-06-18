<?php

namespace Tndjx\XeroManager;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class XeroManager extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('xero-manager', __DIR__.'/../dist/js/xero-manager.js');
        Nova::style('xero-manager', __DIR__.'/../dist/css/xero-manager.css');
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        return MenuSection::make('Xero Manager')
            ->path('/xero-manager')
            ->icon('server');
    }
}
