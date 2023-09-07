<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_to_register(){
        $response = $this->json('POST', '/api/register', [
            'name'  =>  'Test',
            'email'  =>  time().'test@test.com',
            'password'  =>  '12345678',
        ]);

        $response->assertStatus(200);
        $this->assertArrayHasKey('access_token',$response->json());
    }

    public function test_to_login(){
        $email = time().'@test.com';
        $password = '12345678';
        User::create([
            'name' => 'Test',
            'email'=> $email,
            'password' => bcrypt($password)
        ]);

        $response = $this->json('POST','/api/login',[
            'email' => $email,
            'password' => $password,
        ]);

        $response->assertStatus(200);

        User::where('email',$email)->delete();
    }

    protected function authenticate()
    {
        $email = time().'logout@test.com';
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

    public function test_to_logout(){
        $token = $this->authenticate();
        $response = $this->withHeaders([
            'Authorization' => 'Bearer '. $token,
        ])->json('POST','api/logout');

        $response->assertStatus(200);
    }
}
