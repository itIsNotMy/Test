<?php

namespace App\Policies;

use App\Models\Record;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Carbon\Carbon;

class RecordPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Record $record)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Record $record)
    {
        return $user->role->role == 'administrator' || $user->role->role == 'user' && $record->owner_id == $user->id && $record->created_at->addHours(2) > Carbon::now();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Record $record)
    {
        return $user->role->role == 'administrator' || $user->role->role == 'user' && $record->owner_id == $user->id && $record->created_at->addHours(2) > Carbon::now();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Record $record)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Record $record)
    {
        //
    }

    public function formexport(User $user) 
    {
        return $user->role->role == 'administrator';
    }
}
