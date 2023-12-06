<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Resources\Menu\MenuResource;
use App\Services\MenuService;
use App\Utilities\LinkObject;

class MenuController extends Controller
{
    private $_menuService;
    
     public function __construct(MenuService $menuService)
    {
        // $this->middleware('auth:api', ['except' => ['publicRootMenus']]);
        $this->_menuService = $menuService;
    }

    public function index()
    {
        return MenuResource::collection($this->_menuService->all())->additional([
            'links' => [
                new LinkObject("store", "New Menu", route('menus.store'), "POST"),
            ]
        ]);

    }
     public function adminRootMenus()
    {
        return MenuCollection::collection($this->_menuService->adminRootMenus())->additional([
            'links' => [
                new LinkObject("store", "New Menu", route('menus.store'), "POST"),
            ]
        ]);
    }
    public function publicRootMenus()
    {
        return MenuCollection::collection($this->_menuService->publicRootMenus())->additional([
            'links' => [
                new LinkObject("store", "New Menu", route('menus.store'), "POST"),
            ]
        ]);
    }

   
    public function store(StoreMenuRequest $request)
    {
        //
        return new MenuResource($this->_menuService->store($menu));

    }

 
    public function show($menu)
    {
        return new MenuResource($this->_menuService->show($menu));
        // return ('hellow');
    }


  
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
        return new MenuResource($this->_menuService->update($menu));

    }


    public function destroy($menu)
    {
        //
        return new MenuResource($this->_menuService->destroy($menu));
    }
}
