<?php

namespace App\Http\Resources\Menu;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'menuName' => $this->menu_name,
            'url' => $this->link_to,
            'icon' => $this->icon,
            'parentId' => $this->parent_id,
            'adminMenu' => $this->admin_menu,
            'active' => $this->active,
        ];
    }
}
