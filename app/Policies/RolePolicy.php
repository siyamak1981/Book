<?php

namespace App\Policies;

use App\Access\Role;
use App\Models\Access\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any Modelss.
     *
     * @param  \App\Models\Access\Admin  $user
     * @return mixed
     */
    public function viewAny(Admin $user)
    {
        return $this->getPermission($user, 9);
    }

    /**
     * Determine whether the user can view the Models.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param  \App\Access\Role  $role
     * @return mixed
     */
    public function view(Admin $user)
    {
        return $this->getPermission($user, 9);
    }

    /**
     * Determine whether the user can create Modelss.
     *
     * @param  \App\Models\Access\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user, 9);
    }

    /**
     * Determine whether the user can update the Models.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param  \App\Access\Role  $role
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user, 9);
    }

    /**
     * Determine whether the user can delete the Models.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param  \App\Access\Role  $role
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user, 9);
    }

    /**
     * Determine whether the user can restore the Models.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param  \App\Access\Role  $role
     * @return mixed
     */
    public function restore(Admin $Admin)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the Models.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param  \App\Access\Role  $role
     * @return mixed
     */
    public function forceDelete(Admin $user)
    {
        //
    }
    public function permission(Admin $user)
    {
        return $this->getPermission($user, 10);
    }
    public function getPermission($user, $p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id ==$p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
