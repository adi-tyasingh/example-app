<?php
namespace practicals;
// Define the Song class
class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor to initialize the properties
    public function __construct($title=null, $artist=null, $genre=null, $tempo=null) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter method for title
    public function getTitle() {
        return $this->title;
    }

    // Setter method for title
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter method for artist
    public function getArtist() {
        return $this->artist;
    }

    // Setter method for artist
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter method for genre
    public function getGenre() {
        return $this->genre;
    }

    // Setter method for genre
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter method for tempo
    public function getTempo() {
        return $this->tempo;
    }
    // Setter method for tempo
    public function setTempo($tempo) {
        // Check if $tempo is either an integer or a string containing only digits
        if (is_int($tempo) || (is_string($tempo) && ctype_digit($tempo))) {
            $this->tempo = (int) $tempo; // Convert to integer if it's a string
        } else {
            throw new \InvalidArgumentException('Tempo must be an integer or a string containing only digits.');
        }
    }
}
?>
