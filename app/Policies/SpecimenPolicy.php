<?php

namespace App\Policies;

use App\Models\BioRoles;
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
        // dd($user);
        if ($user->role == BioRoles::Admin->value) {
            return false;
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
     * @param  \App\Models\Collection\Specimen  $specimen
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Specimen $specimen)
    {
        return $user->role == BioRoles::Supervisor ||
            $user->id == $specimen->creator_id;
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
     * @param  \App\Models\Collection\Specimen  $specimen
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Specimen $specimen)
    {
        return $user->role == BioRoles::Supervisor ||
            $user->id == $specimen->creator_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Collection\Specimen  $specimen
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Specimen $specimen)
    {
        return $user->role == BioRoles::Supervisor;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Collection\Specimen  $specimen
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
     * @param  \App\Models\Collection\Specimen  $specimen
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Specimen $specimen)
    {
        //
    }
}
