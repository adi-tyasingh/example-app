<?php
// Define the Song class
class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor to initialize the properties
    public function __construct($title, $artist, $genre, $tempo) {
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
        $this->tempo = $tempo;
    }
}
?>
