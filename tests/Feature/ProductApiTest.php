<?php

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('pode listar produtos', function () {
    Product::factory()->count(3)->create();

    $response = $this->getJson('/api/products');

    $response->assertStatus(200)
        ->assertJsonCount(3);
});

test('pode criar um produto com dados validos', function () {
    $data = [
        'name' => 'Tijolo 6 furos',
        'description' => 'Tijolo ceramico',
        'brand' => 'Olaria',
        'price' => 1.50,
        'stock' => 1000,
    ];

    $response = $this->postJson('/api/products', $data);

    $response->assertStatus(201)
        ->assertJsonFragment(['name' => 'Tijolo 6 furos']);

    $this->assertDatabaseHas('products', ['name' => 'Tijolo 6 furos']);
});

test('nao pode criar um produto faltando dados obrigatorios', function () {
    $data = [
        'name' => 'Produto sem preco',
        // Faltam brand, price e stock
    ];

    $response = $this->postJson('/api/products', $data);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['brand', 'price', 'stock']);
});

test('pode atualizar um produto', function () {
    $product = Product::factory()->create([
        'price' => 50.00,
    ]);

    $response = $this->putJson("/api/products/{$product->id}", [
        'price' => 99.90,
    ]);

    $response->assertStatus(200)
        ->assertJsonFragment(['price' => '99.90']);

    $this->assertDatabaseHas('products', ['id' => $product->id, 'price' => 99.90]);
});

test('pode excluir um produto', function () {
    $product = Product::factory()->create();

    $response = $this->deleteJson("/api/products/{$product->id}");

    $response->assertStatus(204);
    $this->assertDatabaseMissing('products', ['id' => $product->id]);
});
