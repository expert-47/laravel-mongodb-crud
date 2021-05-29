<?php
namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Animal extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'animals';

    protected $fillable = [
        'species', 'color', 'leg'
    ];
}
