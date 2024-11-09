<?php
/*
Question: Create a Laravel model relationship between the Publisher model and the Book model. The relationship should be defined as follows:
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
