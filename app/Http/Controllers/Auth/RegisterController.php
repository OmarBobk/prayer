<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PrayerUser;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $january = [
            // day 1
            ['month' => 'January', 'day_arrangement' => 1, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 1, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 1, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 1, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 1, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 2
            ['month' => 'January', 'day_arrangement' => 2, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 2, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 2, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 2, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 2, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 3
            ['month' => 'January', 'day_arrangement' => 3, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 3, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 3, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 3, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 3, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 4
            ['month' => 'January', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 5
            ['month' => 'January', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 6
            ['month' => 'January', 'day_arrangement' => 6, 'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 6, 'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 6, 'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 6, 'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 6, 'user_id' => $user->id,'prayer_id' => 5],

            // day 7
            ['month' => 'January', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 8
            ['month' => 'January', 'day_arrangement' => 8, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 8, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 8, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 8, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 8, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 9
            ['month' => 'January', 'day_arrangement' => 9, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 9, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 9, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 9, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 9, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 10
            ['month' => 'January', 'day_arrangement' => 10, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 10, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 10, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 10, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 10, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 11
            ['month' => 'January', 'day_arrangement' => 11, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 11, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 11, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 11, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 11, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 12
            ['month' => 'January', 'day_arrangement' => 12, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 12, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 12, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 12, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 12, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 13
            ['month' => 'January', 'day_arrangement' => 13, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 13, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 13, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 13, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 13, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 14
            ['month' => 'January', 'day_arrangement' => 14, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 14, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 14, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 14, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 14, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 15
            ['month' => 'January', 'day_arrangement' => 15, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 15, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 15, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 15, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 15, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 16
            ['month' => 'January', 'day_arrangement' => 16, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 16, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 16, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 16, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 16, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 17
            ['month' => 'January', 'day_arrangement' => 17, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 17, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 17, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 17, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 17, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 18
            ['month' => 'January', 'day_arrangement' => 18, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 18, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 18, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 18, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 18, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 19
            ['month' => 'January', 'day_arrangement' => 19, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 19, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 19, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 19, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 19, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 20
            ['month' => 'January', 'day_arrangement' => 20, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 20, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 20, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 20, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 20, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 21
            ['month' => 'January', 'day_arrangement' => 21, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 21, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 21, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 21, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 21, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 22
            ['month' => 'January', 'day_arrangement' => 22, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 22, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 22, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 22, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 22, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 23
            ['month' => 'January', 'day_arrangement' => 23, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 23, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 23, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 23, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 23, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 24
            ['month' => 'January', 'day_arrangement' => 24, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 24, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 24, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 24, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 24, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 25
            ['month' => 'January', 'day_arrangement' => 25, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 25, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 25, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 25, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 25, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 26
            ['month' => 'January', 'day_arrangement' => 26, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 26, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 26, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 26, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 26, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 27
            ['month' => 'January', 'day_arrangement' => 27, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 27, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 27, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 27, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 27, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 28
            ['month' => 'January', 'day_arrangement' => 28, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 28, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 28, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 28, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 28, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 29
            ['month' => 'January', 'day_arrangement' => 29, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 29, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 29, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 29, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 29, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 30
            ['month' => 'January', 'day_arrangement' => 30, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 30, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 30, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 30, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 30, 'user_id' => $user->id,  'prayer_id' => 5],

            // day 31
            ['month' => 'January', 'day_arrangement' => 31, 'user_id' => $user->id,  'prayer_id' => 1],
            ['month' => 'January', 'day_arrangement' => 31, 'user_id' => $user->id,  'prayer_id' => 2],
            ['month' => 'January', 'day_arrangement' => 31, 'user_id' => $user->id,  'prayer_id' => 3],
            ['month' => 'January', 'day_arrangement' => 31, 'user_id' => $user->id,  'prayer_id' => 4],
            ['month' => 'January', 'day_arrangement' => 31, 'user_id' => $user->id,  'prayer_id' => 5],
        ];
        $february = [
            // day 1
            ['month' => 'February', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 5],

            // day 2
            ['month' => 'February', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 5],

            // day 3
            ['month' => 'February', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 5],

            // day 4
            ['month' => 'February', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 5],

            // day 5
            ['month' => 'February', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 5],

            // day 6
            ['month' => 'February', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 5],

            // day 7
            ['month' => 'February', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 5],

            // day 8
            ['month' => 'February', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 5],

            // day 9
            ['month' => 'February', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 5],

            // day 10
            ['month' => 'February', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'February', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'February', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'February', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'February', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'February', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'February', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'February', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'February', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'February', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'February', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'February', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'February', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'February', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'February', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'February', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'February', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'February', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'February', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'February', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'February', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'February', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'February', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $march = [
            // day 1
            ['month' => 'March', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 5],

            // day 2
            ['month' => 'March', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 5],

            // day 3
            ['month' => 'March', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 5],

            // day 4
            ['month' => 'March', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 5],

            // day 5
            ['month' => 'March', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 5],

            // day 6
            ['month' => 'March', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 5],

            // day 7
            ['month' => 'March', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 5],

            // day 8
            ['month' => 'March', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 5],

            // day 9
            ['month' => 'March', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 5],

            // day 10
            ['month' => 'March', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'March', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'March', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'March', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'March', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'March', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'March', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'March', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'March', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'March', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'March', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'March', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'March', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'March', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'March', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'March', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'March', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'March', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'March', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'March', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'March', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 31
            ['month' => 'March', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'March', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'March', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'March', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'March', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $april = [
            // day 1
            ['month' => 'April', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 1,  'user_id' => $user->id,'prayer_id' => 5],

            // day 2
            ['month' => 'April', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 2,  'user_id' => $user->id,'prayer_id' => 5],

            // day 3
            ['month' => 'April', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 3,  'user_id' => $user->id,'prayer_id' => 5],

            // day 4
            ['month' => 'April', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 4,  'user_id' => $user->id,'prayer_id' => 5],

            // day 5
            ['month' => 'April', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 5,  'user_id' => $user->id,'prayer_id' => 5],

            // day 6
            ['month' => 'April', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 6,  'user_id' => $user->id,'prayer_id' => 5],

            // day 7
            ['month' => 'April', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 7,  'user_id' => $user->id,'prayer_id' => 5],

            // day 8
            ['month' => 'April', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 8,  'user_id' => $user->id,'prayer_id' => 5],

            // day 9
            ['month' => 'April', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 9,  'user_id' => $user->id,'prayer_id' => 5],

            // day 10
            ['month' => 'April', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'April', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'April', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'April', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'April', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'April', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'April', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'April', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'April', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'April', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'April', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'April', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'April', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'April', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'April', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'April', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'April', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'April', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'April', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'April', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'April', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'April', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'April', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'April', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'April', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $may = [
            // day 1
            ['month' => 'May', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 2
            ['month' => 'May', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 3
            ['month' => 'May', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 4
            ['month' => 'May', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 5
            ['month' => 'May', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 6
            ['month' => 'May', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 7
            ['month' => 'May', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 8
            ['month' => 'May', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 9
            ['month' => 'May', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 10
            ['month' => 'May', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'May', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'May', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'May', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'May', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'May', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'May', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'May', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'May', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'May', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'May', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'May', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'May', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'May', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'May', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'May', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'May', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'May', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'May', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'May', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'May', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 31
            ['month' => 'May', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'May', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'May', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'May', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'May', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $june = [
            // day 1
            ['month' => 'June', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 2
            ['month' => 'June', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 3
            ['month' => 'June', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 4
            ['month' => 'June', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 5
            ['month' => 'June', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 6
            ['month' => 'June', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 7
            ['month' => 'June', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 8
            ['month' => 'June', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 9
            ['month' => 'June', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 10
            ['month' => 'June', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'June', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'June', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'June', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'June', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'June', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'June', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'June', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'June', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'June', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'June', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'June', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'June', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'June', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'June', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'June', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'June', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'June', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'June', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'June', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'June', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'June', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'June', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'June', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'June', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $july = [
            // day 1
            ['month' => 'July', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 2
            ['month' => 'July', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 3
            ['month' => 'July', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 4
            ['month' => 'July', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 5
            ['month' => 'July', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 6
            ['month' => 'July', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 7
            ['month' => 'July', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 8
            ['month' => 'July', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 9
            ['month' => 'July', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 10
            ['month' => 'July', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'July', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'July', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'July', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'July', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'July', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'July', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'July', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'July', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'July', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'July', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'July', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'July', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'July', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'July', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'July', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'July', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'July', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'July', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'July', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'July', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 31
            ['month' => 'July', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'July', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'July', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'July', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'July', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $august = [
            // day 1
            ['month' => 'August', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 2
            ['month' => 'August', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 3
            ['month' => 'August', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 4
            ['month' => 'August', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 5
            ['month' => 'August', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 6
            ['month' => 'August', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 7
            ['month' => 'August', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 8
            ['month' => 'August', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 9
            ['month' => 'August', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 10
            ['month' => 'August', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'August', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'August', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'August', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'August', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'August', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'August', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'August', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'August', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'August', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'August', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'August', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'August', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'August', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'August', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'August', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'August', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'August', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'August', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'August', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'August', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 31
            ['month' => 'August', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'August', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'August', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'August', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'August', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $september = [
            // day 1
            ['month' => 'September', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 2
            ['month' => 'September', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 3
            ['month' => 'September', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 4
            ['month' => 'September', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 5
            ['month' => 'September', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 6
            ['month' => 'September', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 7
            ['month' => 'September', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 8
            ['month' => 'September', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 9
            ['month' => 'September', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 10
            ['month' => 'September', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'September', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'September', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'September', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'September', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'September', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'September', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'September', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'September', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'September', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'September', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'September', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'September', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'September', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'September', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'September', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'September', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'September', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'September', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'September', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'September', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'September', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'September', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'September', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'September', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $october = [
            // day 1
            ['month' => 'October', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 2
            ['month' => 'October', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 3
            ['month' => 'October', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 4
            ['month' => 'October', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 5
            ['month' => 'October', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 6
            ['month' => 'October', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 7
            ['month' => 'October', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 8
            ['month' => 'October', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 9
            ['month' => 'October', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 10
            ['month' => 'October', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'October', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'October', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'October', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'October', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'October', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'October', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'October', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'October', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'October', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'October', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'October', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'October', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'October', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'October', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'October', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'October', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'October', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'October', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'October', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'October', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 31
            ['month' => 'October', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'October', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'October', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'October', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'October', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $november = [
            // day 1
            ['month' => 'November', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 2
            ['month' => 'November', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 3
            ['month' => 'November', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 4
            ['month' => 'November', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 5
            ['month' => 'November', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 6
            ['month' => 'November', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 7
            ['month' => 'November', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 8
            ['month' => 'November', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 9
            ['month' => 'November', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 10
            ['month' => 'November', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'November', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'November', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'November', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'November', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'November', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'November', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'November', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'November', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'November', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'November', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'November', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'November', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'November', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'November', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'November', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'November', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'November', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'November', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'November', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'November', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'November', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'November', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'November', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'November', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],
        ];
        $december = [
            // day 1
            ['month' => 'December', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 1, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 2
            ['month' => 'December', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 2, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 3
            ['month' => 'December', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 3, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 4
            ['month' => 'December', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 4, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 5
            ['month' => 'December', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 5, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 6
            ['month' => 'December', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 6, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 7
            ['month' => 'December', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 7, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 8
            ['month' => 'December', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 8, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 9
            ['month' => 'December', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 9, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 10
            ['month' => 'December', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 10, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 11
            ['month' => 'December', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 11, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 12
            ['month' => 'December', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 12, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 13
            ['month' => 'December', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 13, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 14
            ['month' => 'December', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 14, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 15
            ['month' => 'December', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 15, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 16
            ['month' => 'December', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 16, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 17
            ['month' => 'December', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 17, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 18
            ['month' => 'December', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 18, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 19
            ['month' => 'December', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 19, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 20
            ['month' => 'December', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 20, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 21
            ['month' => 'December', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 21, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 22
            ['month' => 'December', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 22, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 23
            ['month' => 'December', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 23, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 24
            ['month' => 'December', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 24, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 25
            ['month' => 'December', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 25, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 26
            ['month' => 'December', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 26, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 27
            ['month' => 'December', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 27, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 28
            ['month' => 'December', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 28, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 29
            ['month' => 'December', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 29, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 30
            ['month' => 'December', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 30, 'user_id' => $user->id, 'prayer_id' => 5],

            // day 31
            ['month' => 'December', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 1],
            ['month' => 'December', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 2],
            ['month' => 'December', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 3],
            ['month' => 'December', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 4],
            ['month' => 'December', 'day_arrangement' => 31, 'user_id' => $user->id, 'prayer_id' => 5],
        ];

        $data = [];
        $data = array_merge($data, $january, $february, $march, $april, $may, $june, $july, $august, $september, $october, $november, $december);

        PrayerUser::insert($data);

        return $user;
    }
}
