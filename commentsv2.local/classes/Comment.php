<?php

class Comment
{
    /**
     * @param $comment
     * @return bool|mysqli_result
     */
    //Method adds a comment to database
    public static function addComment($comment)
    {
        if (!empty($comment)){
            $db = DB::getConnection();
            $user = Session::get('user');
            $id = $user->getUserid();
            $query = "INSERT INTO articles (user_id, article, date_created) VALUES ('$id','$comment', NOW())";
            $res = $db->query($query);
            return $res;
        }
    }
}