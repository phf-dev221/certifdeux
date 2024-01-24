<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Bien;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class BienTest extends TestCase
{
    /**
     * A basic feature test example.
     */


    public function test_store_bien()
    {
        Storage::fake('public');
        $imageFile = UploadedFile::fake()->image('test_image.jpg');

        $user = user::factory()->create();
        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $bien = [
            "libelle"=>"ftfy",
            "lieu"=>"hvdjhv",
            "description"=>"gfhgfgv",
            "date"=>"2023-01-14",
            "categorie_id"=>2,
            'image' => [$imageFile],
            "statut"=>"en attente",
            "user_id"=>15,
            "rendu"=>0
        ];

        $response = $this->post('/api/biens/store',$bien);
        $response->assertStatus(200);

    }

    public function test_liste_biens_acceptes(){
        $user = user::factory()->create();
        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('api/biens/index/4');
        $response->assertStatus(200);
    }

    public function test_biens_show(){

        $user = user::factory()->create();
        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('api/biens/23/show');
        $response->assertStatus(200);
    }   

    // public function test_biens_update()
    // {

    //     $user = User::factory()->create();
    //     $this->actingAs($user);

    //     $newbien = [
    //         "libelle"=>"ftfy",
    //         "lieu"=>"hvdjhv",
    //         "description"=>"gfhgfgv",
    //         "date"=>"2023-01-14",
    //         "categorie_id"=>2,
    //         "statut"=>"en attente",
    //         "user_id"=>15,
    //         "rendu"=>0
    //     ];
    //     // var_dump($newbien);
    //     $response = $this->post("/api/biens/23/update", $newbien);
    //     $response->assertStatus(200)->json();
    // }


    public function test_store_bien_basse()
    {
        Storage::fake('public');
        $imageFile = UploadedFile::fake()->image('test_image.jpg');

        $user = user::factory()->create();
        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $response = $this->put('/api/biens/24/update',[
            "libelle"=>"ftfy",
            "lieu"=>"hvdjhv",
            "description"=>"gfhgfgv",
            "date"=>"2023-01-14",
            "categorie_id"=>2,
            // 'image' => [$imageFile],
            "statut"=>"en attente",
            // "user_id"=>15,
            "rendu"=>0
        ]);
        $response->assertStatus(200);

    }
 }


