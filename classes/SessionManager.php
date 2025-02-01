<?php
class SessionManager {

    // Start a session if not already started
    public static function startSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Set a session variable
    public static function set($key, $value) {
        self::startSession();  // Ensure the session is started
        $_SESSION[$key] = $value;
    }

    // Get a session variable
    public static function get($key) {
        self::startSession();  // Ensure the session is started
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    // Check if a session variable is set
    public static function has($key) {
        self::startSession();  // Ensure the session is started
        return isset($_SESSION[$key]);
    }

    // Remove a session variable
    public static function remove($key) {
        self::startSession();  // Ensure the session is started
        unset($_SESSION[$key]);
    }

    // Destroy the session
    public static function destroy() {
        self::startSession();  // Ensure the session is started
        session_unset();
        session_destroy();
    }
}
?>
