<?php

namespace Tests\Feature;

use App\Models\City;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     protected function authenticate()
    {
        $email = time().'city@test.com';
        $password = '12345678';
        $user = User::create([
            'name' => 'Test',
            'email'=> $email,
            'password' => bcrypt($password)
        ]);

        if (!auth()->attempt(['email'=>$email, 'password'=>$password])) {
            return response(['message' => 'Wrong Email or Password']);
        }

        return auth()->user()->createToken('auth_token')->plainTextToken;
    }

    public function test_get_city()
    {
        $city = City::get()->random()->id;
        $token = $this->authenticate();
        
        $response = $this->withHeaders([
            'Authorization' => 'Bearer '. $token,
        ])->json('GET','api/search/cities?id='. $city);

        $response->assertStatus(200);
    }
}
