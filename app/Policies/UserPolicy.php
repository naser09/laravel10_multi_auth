<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AppModel;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }
    function viewUser(User $user):bool {
        return auth()->user()->role === config('role.ADMIN_ROLE');
    }
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, AppModel $appModel): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, AppModel $appModel): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AppModel $appModel): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, AppModel $appModel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, AppModel $appModel): bool
    {
        //
    }
}
