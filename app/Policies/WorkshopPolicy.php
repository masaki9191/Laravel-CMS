<?php

namespace App\Policies;

use App\Models\Master;
use App\Models\Workshop;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkshopPolicy
{

    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Master  $master
     * @return mixed
     */
    public function viewAny(Master $master)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Master  $master
     * @param  \App\Models\Workshop  $workshop
     * @return mixed
     */
    public function view(Master $master, Workshop $workshop)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Master  $master
     * @return mixed
     */
    public function create(Master $master)
    {
        if (request()->get('master_id')) {
            if ($master->hasRole('master') && request()->get('master_id') != $master->id) {
                return FALSE;
            }
        }
        return TRUE;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Master  $master
     * @param  \App\Models\Workshop  $workshop
     * @return mixed
     */
    public function update(Master $master, Workshop $workshop)
    {
        if ($master->hasRole('master') && $workshop->master_id != $master->id) {
            return FALSE;
        }
        return TRUE;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Master  $master
     * @param  \App\Models\Workshop  $workshop
     * @return mixed
     */
    public function delete(Master $master, Workshop $workshop)
    {
        if ($master->hasRole('master') && $workshop->master_id != $master->id) {
            return FALSE;
        }
        return TRUE;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Master  $master
     * @param  \App\Models\Workshop  $workshop
     * @return mixed
     */
    public function restore(Master $master, Workshop $workshop)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Master  $master
     * @param  \App\Models\Workshop  $workshop
     * @return mixed
     */
    public function forceDelete(Master $master, Workshop $workshop)
    {
        //
    }

}
