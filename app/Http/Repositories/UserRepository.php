<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function update($user, $request)
    {
        $data = $request->all();
        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);
    }
}
