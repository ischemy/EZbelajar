<?php

namespace App\Actions\Fortify;

use App\Models\User\DetailUser;
use App\Models\User\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) {

                // add to detail users
                $detail_user = new DetailUser;
                $detail_user->user_id = $user->id;
                $detail_user->photo = NULL;
                $detail_user->occupation = NULL;
                $detail_user->sex = NULL;
                $detail_user->save();

                // assign user
                $user->assignRole('user');
            });
        });

//        return User::create([
//            'name' => $input['name'],
//            'email' => $input['email'],
//            'password' => Hash::make($input['password']),
//        ]);
    }
}
