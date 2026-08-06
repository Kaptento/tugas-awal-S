<?php

it('renders the create student form and uses the create view', function () {
    $response = $this->get('/students/create');

    $response->assertStatus(200);
    $response->assertViewIs('students.create');
    $response->assertSee('name="nis"', false);
    $response->assertSee('action="' . route('students.store') . '"', false);
});
