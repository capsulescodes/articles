<?php

use App\Models\User;


beforeEach( function()
{
    $this->user = User::first();

    $this->new = "Capsules Codes";
} );




it( "can modify first user name between two tests", function()
{
    $name = $this->user->name;

    echo $this->user->name;

    expect( $this->user->name )->toBe( $name );

    $this->user->name = $this->new;

    $this->user->save();
} );


it( "can verify first user name between two tests", function()
{
    echo " > {$this->user->name} \n";

    expect( $this->user->name )->toBe( $this->new );
} );
