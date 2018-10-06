<?php

namespace App\Policies;

use App\User;
use App\Match;
use Illuminate\Auth\Access\HandlesAuthorization;

class MatchPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the match.
     *
     * @param  \App\User  $user
     * @param  \App\Match  $match
     * @return mixed
     */
    public function view(User $user, Match $match)
    {
        //
    }

    /**
     * Determine whether the user can create matches.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the match.
     *
     * @param  \App\User  $user
     * @param  \App\Match  $match
     * @return mixed
     */
    public function update(User $user, Match $match)
    {
        return $match->users->contains($user);
    }

    /**
     * Determine whether the user can delete the match.
     *
     * @param  \App\User  $user
     * @param  \App\Match  $match
     * @return mixed
     */
    public function delete(User $user, Match $match)
    {
        //
    }

    /**
     * Determine whether the user can restore the match.
     *
     * @param  \App\User  $user
     * @param  \App\Match  $match
     * @return mixed
     */
    public function restore(User $user, Match $match)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the match.
     *
     * @param  \App\User  $user
     * @param  \App\Match  $match
     * @return mixed
     */
    public function forceDelete(User $user, Match $match)
    {
        //
    }
}
