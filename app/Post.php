<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attribute of database connection bound to the model.
     *
     * @var array
     */
    protected $connection = 'mysql';

    /**
     * Function to link database connection to constructor of model
     * Avec cette fonctionn, on instancie un objet dans une base de donnée qu'on peut utiliser
     *
     * @var array
     */
    public function __construct($connection = 'mysql')
    {
        $this->connection = $connection;
    }
}
