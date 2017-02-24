<?php
class Session
{
    /**
     * Starts the session
     */
    public static function start()
    {
        if (isset($_COOKIE['session_id'])){
            session_id($_COOKIE['session_id']);
            session_start();
        } else {
            session_start();
            setcookie("session_id", session_id());
        }
    }

    /**
     * Destroys the session
     */
    public static function stop()
    {
        session_destroy();
    }

    /**
     * Sets the value to the session by key
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Gets the value from the session
     * @param $key
     * @return null
     */
    public static function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    /**
     * Removes value from the session by key
     * @param $key
     */
    public static function remove($key)
    {
        unlink($_SESSION[$key]);
    }
}