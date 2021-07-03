<?php

namespace App\Policies;

use App\Model\Admin\Admin;

use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @return mixed
     */
    public function viewAny(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\User\Product  $product
     * @return mixed
     */
    public function view(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user, 5);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\User\Product  $product
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user, 7);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\User\Product  $product
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user, 6);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\User\Product  $product
     * @return mixed
     */
    public function restore(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Model\Admin\Admin  $user
     * @param  \App\User\Product  $product
     * @return mixed
     */
    public function forceDelete(Admin $user)
    {
        //
    }
    public function tag(admin $user)
    {
        return $this->getPermission($user, 12);
    }

    public function category(admin $user)
    {
        return $this->getPermission($user, 13);
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
