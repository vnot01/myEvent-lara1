<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //

        return $user->hasPermissionTo('manage users');
    }

    // /**
    //  * Determine whether the user can view the model.
    //  */
    public function view(User $user): bool
    {
        //
        // if ($user->hasPermissionTo('manage users')) {
        //     return $user->id === $model->user_id;
        // }

        return $user->hasPermissionTo('manage users');
    }

    // /**
    //  * Determine whether the user can create models.
    //  */
    public function create(User $user): bool
    {
        //
        return $user->hasPermissionTo('create users');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        //
        return $user->hasPermissionTo('edit users');
    }

    // /**
    //  * Determine whether the user can delete the model.
    //  */
    // public function delete(User $user, User $model): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can restore the model.
    //  */
    // public function restore(User $user, User $model): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can permanently delete the model.
    //  */
    // public function forceDelete(User $user, User $model): bool
    // {
    //     //
    // }
}