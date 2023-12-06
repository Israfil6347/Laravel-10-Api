<?php
namespace App\Services;

use App\Repositories\Interfaces\MenuRepositoryInterface;

class MenuService
{

    private $_menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository)
    {
        $this->_menuRepository = $menuRepository;
    } 
    public function publicRootMenus()
    {
        return $this->_menuRepository->publicRootMenus();
    }

    public function adminRootMenus()
    {
        return $this->_menuRepository->adminRootMenus();
    }
    public function all()
    {
        return $this->_menuRepository->all();
    }
    public function store($request)
    {
        return $this->_menuRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->_menuRepository->update($request, $id);
    }
    public function show($request)
    {
        return $this->_menuRepository->show($request);
    }
    public function destroy($id)
    {
        return $this->_menuRepository->destroy($id);
    }

}