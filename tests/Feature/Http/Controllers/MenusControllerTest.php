<?php

namespace Tests\Feature\Http\Controllers;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenusControllerTest extends TestCase
{
    use RefreshDatabase;
   
    public function test_the_menus_index_is_rendered_properly()
    {
        $this->withoutExceptionHandling();
        $user=User::factory(23)->create();
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    function test_users_can_create_orders(){
        
    }
}
