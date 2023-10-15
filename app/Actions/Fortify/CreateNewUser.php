<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'postnom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'password_confirmation' => ['required'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'nom' => $input['name'],
            'postnom' => $input['postnom'],
            'prenom' => $input['prenom'],
            'email' => $input['email'],
            'entreprise_id' => 1,
            'password' => Hash::make($input['password']),
        ]);
    }
}
