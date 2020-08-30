<?php

namespace Modules\User\Services;

use Modules\User\Contracts\Authentication;
use Modules\User\Events\UserHasRegistered;
use Modules\User\Repositories\RoleRepository;

class UserRegistration
{
    /**
     * @var Authentication
     */
    private $auth;
    /**
     * @var RoleRepository
     */
    private $role;
    /**
     * @var array
     */
    private $input;

    public function __construct(Authentication $auth, RoleRepository $role)
    {
        $this->auth = $auth;
        $this->role = $role;
    }

    /**
     * @param array $input
     * @return mixed
     */
    public function register(array $input)
    {
        $this->input = $input;

        $user = $this->createUser();
        app(\Modules\User\Repositories\UserTokenRepository::class)->generateFor($user->id);
        if ($this->hasProfileData()) {
            $this->createProfileForUser($user);
        }
        
        // $this->assignUserToUsersGroup($user);    
        // $this->assignUserToShopsGroup($user);

        event(new UserHasRegistered($user));
        return $user;
    }

    public function registerCustomer(array $input)
    {
        $this->input = $input;

        $user = $this->createUser();
        app(\Modules\User\Repositories\UserTokenRepository::class)->generateFor($user->id);
        if ($this->hasProfileData()) {
            $this->createProfileForUser($user);
        }

        // $this->assignUserToUsersGroup($user);    
        // $this->assignUserToShopsGroup($user);

        event(new UserHasRegistered($user));
        dd($user);
        $user->is_customer = 1;
        $user->save();
        return $user;
    }

    private function createUser()
    {
        return $this->auth->register((array) $this->input);
    }

    private function assignUserToUsersGroup($user)
    {
        $role = $this->role->findByName(config('asgard.user.config.default_role', 'User'));

        $this->auth->assignRole($user, $role);
    }

    private function assignUserToShopsGroup($user)
    {
        $role = $this->role->findByName(config('asgard.user.config.shop_role', 'Shop'));

        $this->auth->assignRole($user, $role);
    }

    /**
     * Check if the request input has a profile key
     * @return bool
     */
    private function hasProfileData()
    {
        return isset($this->input['profile']);
    }

    /**
     * Create a profile for the given user
     * @param $user
     */
    private function createProfileForUser($user)
    {
        $profileData = array_merge($this->input['profile'], ['user_id' => $user->id]);
        app('Modules\Profile\Repositories\ProfileRepository')->create($profileData);
    }
}
