<?php

namespace App\Policies;

use App\Models\Collection\Specimen;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpecimenPolicy
{
    use HandlesAuthorization;

    /**
     * Apply rules before checking other methods.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function before(User $user)
    {
        if ($user->role == 10) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }
    
    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Specimen\Specimen  $specimen
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Specimen $specimen)
    {
        if ($user->role == 6) {
            return true;
        }

        if ($user->role == 1) {
            return $user->id == $specimen->creator_id;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Specimen\Specimen  $specimen
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Specimen $specimen)
    {
        if ($user->role == 6) {
            return true;
        }

        if ($user->role == 1) {
            return $user->id == $specimen->creator_id;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Specimen\Specimen  $specimen
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Specimen $specimen)
    {
        if ($user->role == 6) {
            return $user->id == $specimen->creator_id;
        }

        if ($user->role == 1) {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Specimen\Specimen  $specimen
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Specimen $specimen)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Specimen\Specimen  $specimen
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Specimen $specimen)
    {
        //
    }
}
