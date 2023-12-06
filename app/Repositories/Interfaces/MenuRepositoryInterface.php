<?php

namespace App\Repositories\Interfaces;



interface MenuRepositoryInterface
{
    public function all();
    public function publicRootMenus();
    public function adminRootMenus();
    public function store($request);
    public function update($request, $id);
    public function show($id);
    public function destroy($id);
}
