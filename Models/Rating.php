<?php

trait Rating
{
    public $rating;

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating;
    }
}
