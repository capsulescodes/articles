<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;


class PostResource extends JsonResource
{
    public static $wrap = null;

    public function toArray( Request $request ) : array
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'summary' => $this->summary,
            'image' => $this->featured_image,
            'body' => $this->body,
            'time' => round( Str::wordCount( $this->body ) / 200 ),
            'date' => $this->published_at->format( 'd M Y' )
        ];
    }
}
