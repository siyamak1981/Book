<?php

namespace App\Policies;

use App\Models\Access\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Access\Admin  $user
     * @return mixed
     */
    public function viewAny(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function view(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Access\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user, 9);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user, 10);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User\User  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user, 11);
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function restore(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function forceDelete(Admin $user)
    {
        //
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
