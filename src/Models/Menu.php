<?php

namespace Zkuyuo\Airs\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['parent_id', 'name', 'icon', 'uri', 'is_link', 'guard_name', 'permission_name', 'sequence', 'is_display', 'description'];
}
