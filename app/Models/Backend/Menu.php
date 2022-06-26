<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'menus_roles', 'menus_id', 'roles_id');
    }

    private function getMenuPadres($front)
    {
        if ($front) {
            return $this->whereHas('roles', function ($query) {
                $query->where('rol_id', session('rol_id'))->orderby('menus_id');
            })->orderby('menus_id')
                ->orderby('orden')
                ->get()
                ->toArray();
        } else {
            return $this->orderby('menus_id')
                ->orderby('orden')
                ->get()
                ->toArray();
        }
    }

    private function getMenuHijos($padres, $line)
    {
        $hijos = [];
        foreach ($padres as $line2) {
            if ($line['id'] == $line2['menus_id']) {
                $hijos = array_merge($hijos, [array_merge($line2, ['submenu' => $this->getHijos($padres, $line2)])]);
            }
        }
        return $hijos;
    }
    public static function getMenu($front = false)
    {
        $menus = new Menu();
        $padres = $menus->getMenuPadres($front);
        $menuAll = [];
        foreach ($padres as $line) {
            if ($line['menus_id'] != null)
                break;
            $item = [array_merge($line, ['submenu' => $menus->getMenuHijos($padres, $line)])];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menuAll;
    }
}
