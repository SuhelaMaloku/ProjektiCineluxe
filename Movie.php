<?php
class Movie {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllMovies() {
        return $this->db->query("SELECT * FROM movies ORDER BY id DESC");
    }

    public function addMovie($title, $genre, $image, $admin) {
        $title = $this->db->escape($title);
        $genre = $this->db->escape($genre);
        $image = $this->db->escape($image);
        $admin = $this->db->escape($admin);

        $sql = "INSERT INTO movies (title, genre, image_url, added_by) 
                VALUES ('$title', '$genre', '$image', '$admin')";
        return $this->db->query($sql);
    }
    public function getMoviesByGenre($genre) {
    $genre = $this->db->conn->real_escape_string($genre);
    $query = "SELECT * FROM movies WHERE genre = '$genre' ORDER BY id DESC";
    return $this->db->conn->query($query);
}

}
?>
