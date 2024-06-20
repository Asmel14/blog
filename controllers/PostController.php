<?php
include_once '../config/Database.php';
include_once '../models/Post.php';

class PostController {
    private $post;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->post = new Post($db);
    }

    public function index() {
        $result = $this->post->read();
        $num = $result->rowCount();

        if ($num > 0) {
            $posts_arr = array();
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                $post_item = array(
                    'id' => $id,
                    'author' => $author,
                    'content' => html_entity_decode($content),
                    'created_at' => $created_at
                );
                array_push($posts_arr, $post_item);
            }
            return $posts_arr;
        } else {
            return array();
        }
    }

    public function show($id) {
        $this->post->id = $id;
        $this->post->read_single();
        if ($this->post->author != null) {
            $post_arr = array(
                'id' => $this->post->id,
                'author' => $this->post->author,
                'content' => $this->post->content,
                'created_at' => $this->post->created_at
            );
            return $post_arr;
        } else {
            return array();
        }
    }

    public function create($author, $content) {
        $this->post->author = $author;
        $this->post->content = $content;
        if ($this->post->create()) {
            return true;
        }
        return false;
    }
}
?>
