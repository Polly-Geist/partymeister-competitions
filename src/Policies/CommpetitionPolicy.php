<?php

namespace Partymeister\Competition\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Motor\Backend\Models\User;
use {{ namespacedModel }};

class CommpetitionPolicy
{
    use HandlesAuthorization;

    /**
     * Perform pre-authorization checks.
     *
     * @param \Motor\Backend\Models\User $user
     * @param string $ability
     * @return void|bool
     */
    public function before(User $user, $ability)
    {
        if ($user->hasRole('SuperAdmin')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \Motor\Backend\Models\User  $user
     * @return mixed
     */
    public function viewAny({{ user }} $user)
    {
        return $user->hasPermissionTo('{{ permission }}.read');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Motor\Backend\Models\User  $user
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return mixed
     */
    public function view({{ user }} $user, {{ model }} ${{ modelVariable }})
    {
        return $user->hasPermissionTo('{{ permission }}.read');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Motor\Backend\Models\User  $user
     * @return mixed
     */
    public function create({{ user }} $user)
    {
        return $user->hasPermissionTo('{{ permission }}.write');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Motor\Backend\Models\User  $user
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return mixed
     */
    public function update({{ user }} $user, {{ model }} ${{ modelVariable }})
    {
        return $user->hasPermissionTo('{{ permission }}.write');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Motor\Backend\Models\User  $user
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return mixed
     */
    public function delete({{ user }} $user, {{ model }} ${{ modelVariable }})
    {
        return $user->hasPermissionTo('{{ permission }}.delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Motor\Backend\Models\User  $user
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return mixed
     */
    public function restore({{ user }} $user, {{ model }} ${{ modelVariable }})
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Motor\Backend\Models\User  $user
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return mixed
     */
    public function forceDelete({{ user }} $user, {{ model }} ${{ modelVariable }})
    {
        //
    }
}
