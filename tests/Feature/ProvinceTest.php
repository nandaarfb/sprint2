<?php

namespace Tests\Feature;

use App\Models\Province;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProvinceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    protected function authenticate()
    {
        $email = time().'province@test.com';
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

    public function test_get_province()
    {
        $province = Province::get()->random()->id;
        $token = $this->authenticate();
        
        $response = $this->withHeaders([
            'Authorization' => 'Bearer '. $token,
        ])->json('GET','api/search/provinces?id='. $province);

        $response->assertStatus(200);
    }
}
