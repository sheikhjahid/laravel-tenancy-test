U<?php
namespace App\System\Models;
use App\Shared\Models\User as Shared;
use Hyn\Tenancy\Traits\UsesSystemConnection;
class User extends Shared
{
    use UsesSystemConnection;
}