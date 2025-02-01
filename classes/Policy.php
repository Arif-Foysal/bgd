<?php
require_once __DIR__ . '/../config/Database.php';

class Policy {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    // Fetch all categories
    public function getCategories() {
        $stmt = $this->conn->query("SELECT * FROM policy_categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fetch topics under a category
    public function getTopics($category_id) {
        $stmt = $this->conn->prepare("SELECT * FROM policy_topics WHERE category_id = ?");
        $stmt->execute([$category_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fetch policy details by topic ID
    public function getDetails($topic_id) {
        $stmt = $this->conn->prepare("SELECT * FROM policy_details WHERE topic_id = ?");
        $stmt->execute([$topic_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fetch topics and their corresponding policy details for a given category
    public function getTopicsWithDetails($category_id) {
        $stmt = $this->conn->prepare("
            SELECT 
                pt.id AS topic_id, 
                pt.name AS topic_name, 
                pt.description AS topic_description, 
                pt.description_bangla AS topic_description_bangla,
                pd.content AS policy_content, 
                pd.content_bangla AS policy_content_bangla
            FROM policy_topics pt
            LEFT JOIN policy_details pd ON pt.id = pd.topic_id
            WHERE pt.category_id = ?
        ");
        $stmt->execute([$category_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
