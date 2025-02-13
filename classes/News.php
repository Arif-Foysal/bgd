<?php
require_once __DIR__ . '/../config/Database.php';

class News
{
    private $conn;

    public function __construct()
    {
        // Using the Database class to establish the connection
        $this->conn = Database::connect();
    }

    // Create news
    public function createNews($title, $title_bangla, $contents, $contents_bangla, $image_id = null)
    {
        $sql = "INSERT INTO news (news_title, news_title_bangla, contents, contents_bangla, image_id) 
                VALUES (:news_title, :news_title_bangla, :contents, :contents_bangla, :image_id)";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':news_title', $title, PDO::PARAM_STR);
        $stmt->bindValue(':news_title_bangla', $title_bangla, PDO::PARAM_STR);
        $stmt->bindValue(':contents', $contents, PDO::PARAM_STR);
        $stmt->bindValue(':contents_bangla', $contents_bangla, PDO::PARAM_STR);
        $stmt->bindValue(':image_id', $image_id, PDO::PARAM_INT);  // NULL is allowed, no need to bind explicitly if not given
        
        $stmt->execute();
    }

    // Read latest news (limit 6 to check if "See More" is needed)
    public function getLatestNews($limit = null)
    {
        if ($limit) {
            $sql = "SELECT id, news_title_bangla FROM news ORDER BY created_at DESC LIMIT :limit";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        } else {
            $sql = "SELECT id, news_title_bangla, contents, contents_bangla FROM news ORDER BY created_at DESC";
            $stmt = $this->conn->prepare($sql);
        }
        
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Read a single news article by ID
    public function getNewsById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM news WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Update news
    public function updateNews($id, $title, $title_bangla, $contents, $contents_bangla, $image_id = null)
    {
        $sql = "UPDATE news SET news_title = :news_title, news_title_bangla = :news_title_bangla, 
                contents = :contents, contents_bangla = :contents_bangla, image_id = :image_id WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':news_title', $title, PDO::PARAM_STR);
        $stmt->bindValue(':news_title_bangla', $title_bangla, PDO::PARAM_STR);
        $stmt->bindValue(':contents', $contents, PDO::PARAM_STR);
        $stmt->bindValue(':contents_bangla', $contents_bangla, PDO::PARAM_STR);
        $stmt->bindValue(':image_id', $image_id, PDO::PARAM_INT);  // NULL is allowed, so no need to bind explicitly if not provided
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        
        $stmt->execute();
    }

    // Delete news by ID
    public function deleteNews($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM news WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    // Close database connection
    public function closeConnection()
    {
        $this->conn = null; // Nullify PDO connection
    }
}
?>
