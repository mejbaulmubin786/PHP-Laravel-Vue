<?php

/*
Question: Write a Laravel model named Publisher that represents a publisher in a web application. The model should have the following attributes:
·   name
·   address
·   email
·   founded_year

Template:
class Publisher extends Model {

}
*/

class Publisher extends Model
{
    protected $table = 'publishers';

    protected $fillable = ['name', 'address', 'email', 'founded_year'];
}
