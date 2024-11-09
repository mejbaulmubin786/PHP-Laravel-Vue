<?php
/*
Question
Task 1: Write a Laravel model named Publisher that represents a publisher in a web application. The model should have the following attributes:
·   name
·   address
·   email
·   founded_year

Template:
class Publisher extends Model {

}

Task 2: Create a Laravel model relationship between the Publisher model and the Book model. The relationship should be defined as follows:
    A publisher can have multiple books.
    A book belongs to a publisher.
Template:

class Publisher extends Model {
  public function books() {

  }
}

class Book extends Model {

  public function publisher() {

  }
}
*/

#Task 1:
class Publisher extends Model
{
    protected $table = 'publishers';

    protected $fillable = ['name', 'address', 'email', 'founded_year'];
}

#Task 2:
class Publisher extends Model
{
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

class Book extends Model
{
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
