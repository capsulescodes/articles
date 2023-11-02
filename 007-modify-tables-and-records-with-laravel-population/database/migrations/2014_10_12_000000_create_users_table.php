<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public $name = 'users';

    public function up() : void
    {
        Schema::create( $this->name, function( Blueprint $table )
        {
            $table->id();
            $table->string( 'first_ame' );
            $table->string( 'last_name' );
            $table->string( 'email' )->unique();
            $table->timestamp( 'email_verified_at' )->nullable();
            $table->string( 'password' );
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists( $this->name );
    }
};
