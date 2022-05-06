<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    /*
    *   Ce test doit dire qu'on n'a pas accés à l'information parce qu'on n'a pas l'authorization
    */
    public function testGetProduits () {
        $this->json('GET', 'api/produits')
            ->assertStatus(401)
            ->assertJson([
                "message" => "Invalid credentials.",
            ]);
    }

    /*
    *   Ce test doit retourner l'information concernant du produit avec l'id 1
    */
    public function testGetProduit () {
        $this->call('GET', 'api/produits/1', [], [], [], ['PHP_AUTH_USER' => 'joshuakomaba@gmail.com', 'PHP_AUTH_PW' => 'Joshua1!'])
            ->assertStatus(200)
            ->assertJson([
                "id" => 1,
                "name" => "Funko Pop Tennis: Tennis Legends – Roger Federer Vinyl Figure #50365 ",
                "price" => 34.99,
                "provider" => "Funko",
                "quantity" => 12,
                "description" => "Nom : Roger Federer #08 Catégorie : Pop Sports Légendes du tennis Série : Type : Figurine d'action Taille : 9,5 cm Fabricant : Funko Description : Pop Sports Tennis Legends 3,75 cm Action Figure – Roger Federer #08. Avertissement de sécurité : ce produit ",
                "image" => "https://www.toysrus.ca/on/demandware.static/-/Sites-toys-master-catalog/default/dwef46be1f/images/A4CC9B71_1.jpg"
            ]);
    }

    /*
    *   Ce test doit dire qu'on ne peut pas supprimer un produit qui n'existe pas, alors, on retourne un message disant qu'on ne peut pas supprimer un function vide
    */
    public function testDeleteProduit ($email = 'joshuakomaba@gmail.com', $password = 'Joshua1!') {
        $this->withHeaders(['Authorization' => 'Basic '.base64_encode("{$email}:{$password}")])
            ->json('delete', 'api/produits/50')
            ->assertJson([
                'message' => "Call to a member function delete() on null"
            ])
            ->assertStatus(500);
    }
}
