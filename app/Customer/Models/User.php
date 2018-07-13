<?php
namespace App\Customer\Models;
use App\Shared\Models\User as Shared;
use Hyn\Tenancy\Traits\UsesTenantConnection;
class User extends Shared
{
    use UsesTenantConnection;
    protected $with = ['posts'];
   
    public function posts()
    {
        return $this->hasMany(\App\Customer\Models\Post::class);
    }
}
