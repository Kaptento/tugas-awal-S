<?php

it('renders students from the controller data on the index page', function () {
    $response = $this->get('/students');

    $response->assertStatus(200);
    $response->assertViewIs('students.index');
    $response->assertSee('Budi Ariyanto');
    $response->assertSee('2024001');
});
