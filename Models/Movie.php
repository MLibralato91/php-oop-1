<?php
class Movie
{
  public $id;
  public $title;
  public $type;
  public $nationality;
  public $date;
  public $vote;
  public $image;


  public function __construct($title, $type, $nationality, $date, $vote, $image)
  {
    $this->title = $title;
    $this->type = $type;
    $this->nationality = $nationality;
    $this->date = $date;
    $this->vote = $vote;
    $this->image = $image;
  }
}
