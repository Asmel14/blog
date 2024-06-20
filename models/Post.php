<?php
class Post {
    private $conn;
    private $table = 'posts';

    public $id;
    public $author;
    public $content;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = 'SELECT * FROM ' . $this->table . ' ORDER BY created_at DESC';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single() {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = ? LIMIT 0,1';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $this->author = $row['author'];
            $this->content = $row['content'];
            $this->created_at = $row['created_at'];
        }
    }

    public function create() {
        $query = 'INSERT INTO ' . $this->table . ' SET author = :author, content = :content';
        $stmt = $this->conn->prepare($query);
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':content', $this->content);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
