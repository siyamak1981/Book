<?php

namespace App\Policies;

use App\Models\Access\Admin;

use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
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
     * @param  \App\Models\Post $post
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
        return $this->getPermission($user, 3);
    }

    /**
     * Determine whether the Admin can update the model.
     *
     * @param  \App\Models\Access\Admin  $Admin
     * @param   \App\Models\Post  $post
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user, 2);
    }

    /**
     * Determine whether the Admin can delete the model.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param   \App\Models\Post  $post
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user, 4);
    }

    /**
     * Determine whether the Admin can restore the model.
     *
     * @param  \App\Models\Access\Admin  $user
     * @param   \App\Models\Post  $post
     * @return mixed
     */
    public function restore(Admin $user)
    {
        //
    }

    /**
     * Determine whether the Admin can permanently delete the model.
     *
     * @param  \App\Models\Access\Admin  $Admin
     * @param   \App\Models\Post  $post
     * @return mixed
     */
    public function forceDelete(Admin $user)
    {
        //
    }
    public function tag(admin $user)
    {
        return $this->getPermission($user, 7);
    }

    public function category(admin $user)
    {
        return $this->getPermission($user, 8);
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
