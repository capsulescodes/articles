<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Canvas\Models\Post;
use Canvas\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        for( $amount = 1; $amount <= 6; $amount++ )
        {
            $post = new Post();

            $post->id = Str::uuid();
            $post->title = fake()->sentence();
            $post->slug = Str::snake( $post->title, '-' );
            $post->summary = fake()->paragraph();
            $post->body = '<p>' . fake()->paragraph( 2 ) . '</p><br><br><p>' . fake()->paragraph( 8 ) . '</p><br><br><p>' . fake()->paragraph( 6 ) . '</p>';
            $post->published_at = Carbon::now()->addSeconds( $amount );
            $post->featured_image = "/storage/canvas/images/capsules-blog-00{$amount}.jpg";
            $post->user()->associate( $user );

            $post->save();
        }
    }
}
