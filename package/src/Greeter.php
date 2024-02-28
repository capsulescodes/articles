<?php

namespace CapsulesCodes\Package;


class Greeter
{
    public static function greet() : string
    {
        return "Hello world!";
    }

    public static function say( string $something ) : string
    {
        return $something;
    }
}
