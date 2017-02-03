<?php
include_once 'functions.php';
include_once 'session.php';

$action = !empty($_REQUEST['action']) ? $_REQUEST['action'] : "login";
    switch($action) {
        case 'login':
            if (isset($_SESSION['name'])){
                header('location: main.php?action=profile');
            } else {
                $html = "
                <h3>Login page</h3>
                    <form action='' method='POST'>
                        <label for='name'>Enter your name</label>
                        <input type='text' name='name'>
                        <label for='pass'>Enter your password</label>
                        <input type='password' name='pass'>
                        <input type='submit' value='Login'>
                    </form>   
                    <a href='main.php?action=register'>Register</a><br>
                    ";

                $comments = "
                    <h4>Comments:</h4>
                        <table border='1'>
                            <thead>
                                <th>UserID</th>
                                <th>Comment</th>
                                <th>Date created</th>
                            </thead>
                        <tbody>
                    ";

                $data = file_get_contents('comments.json');
                $json_decoded = json_decode($data, true);
                foreach ($json_decoded as $comment) {
                    $dataWords = file_get_contents('banlist.json');
                    $words_array = json_decode($dataWords, true);

                    foreach ($words_array as $word_single) {
                        $comment["comment"] = str_replace($word_single["wordTEXT"],"***",$comment["comment"]);
                    }
                    if ($comment['is_public'] == 1) {
                        $comments .= "<tr>";
                        $comments .= "<td>" . $comment['userID'] . "</td>";
                        $comments .= "<td>" . $comment['comment'] . "</td>";
                        $comments .= "<td>" . $comment['date_created'] . "</td>";
                        $comments .= "<tr>";
                    }
                }
                $comments .= "
                    </tbody>
                    </table>
                ";
                if (isset($_POST['name'])) {
                    $posted_name = htmlspecialchars(trim(strtolower($_POST['name'])));
                    $posted_password = htmlspecialchars(trim($_POST['pass']));
                    $users = json_decode(file_get_contents('users.json'), true);//get_array $users
                    foreach ($users as $user) {
                        if ($user['username'] == $posted_name && $user['password'] == $posted_password) {
                            $_SESSION['name'] = $posted_name;
                            setcookie('userID', $user['userID']);
                            $_SESSION['is_admin'] = $user['is_admin'];
                            header('Location: main.php?action=profile&username=' . $_SESSION['name']);
                        }
                        }
                        if (empty($_SESSION['name'])){
                        echo  $html . 'Please, enter correct name or password';
                    }
                } else {
                    echo $html . '<br>' . $comments;
                }
            }
            break;
        case 'profile':
            if (isset($_SESSION['name'])){
                $comments = "
                    <h4>Comments:</h4>
                        <table border='1'>
                            <thead>
                                <th>UserID</th>
                                <th>Comment</th>
                                <th>Date created</th>
                            </thead>
                        <tbody>
                    ";

                $data = file_get_contents('comments.json');
                $json_decoded = json_decode($data, true);
                foreach ($json_decoded as $comment) {
                    $dataWords = file_get_contents('banlist.json');
                    $words_array = json_decode($dataWords, true);

                    foreach ($words_array as $word_single) {
                        $comment["comment"] = str_replace($word_single["wordTEXT"],"***",$comment["comment"]);
                    }
                    if ($comment['is_public'] == 1) {
                        $comments .= "<tr>";
                        $comments .= "<td>" . $comment['userID'] . "</td>";
                        $comments .= "<td>" . $comment['comment'] . "</td>";
                        $comments .= "<td>" . $comment['date_created'] . "</td>";
                        $comments .= "<tr>";
                    }
                }
                $comments .= "
                </tbody>
                </table>
                <h2>Leave a comment:</h2>
                    <form action='' method='POST'>
                        <input type='text' name='comment'>
                        <input type='submit' value='Send'>
                    </form>
                ";
                echo 'Hello, ' . ucfirst($_SESSION['name']) . '!' . '<br>' . $comments;
                if (isset($_POST['comment'])) {
                    $words = [];
                        $json = file_get_contents('banlist.json');
                        $banList = json_decode($json, true);
                        $str = htmlspecialchars(trim(strtolower($_POST['comment'])));
                        foreach ($banList as $list){
                            if ($_POST['comment'] = $list['wordTEXT']){
                                $words[] = $list['wordTEXT'];
                            }
                        }
                    $comment = str_replace($words, "***", $str);

                    //$comment = str_replace($banList, "***", htmlspecialchars(trim($_POST['comment'])));
                    $comments = json_decode(file_get_contents('comments.json', true));
                    $id = count($comments);
                    $com = ["ID" => $id,'userID' => ucfirst($_SESSION['name']), 'comment' => $comment, 'date_created' => date('Y-m-d H:i:s'), 'is_public' => 0];
                    $comments[] = $com;
                    $json_encoded = json_encode($comments);
                    file_put_contents('comments.json', $json_encoded);
                    header('Location: main.php');
                }
                $html = "<a href='main.php?action=logout'>Logout</a><br>";
                echo $html;
                $is_admin_html = "<a href='main.php?action=admin'>Go to admin page</a>";
                if (!empty($_SESSION['is_admin'])){
                    echo $is_admin_html;
                }
            } else {
                echo "This page is restricted, please " . "<a href='main.php?action=login'>log in</a>";
            }

            break;
        case 'register':
            if (isset($_SESSION['name'])){
                header('location: main.php?action=profile');
            } else {
                $html = "
                    <h1>Register</h1>
                    <form action='' method='POST'>
                        <input type='text' name='name' placeholder='name'><br>
                        <input type='password' name='pass' placeholder='password'><br>
                        <input type='submit' value='Register'>
                    </form>
                    <a href='main.php'>Back to login</a><br>
                    ";
                if (isset($_POST['name'])) {
                    if (strlen($_POST['name']) < 1) {
                        echo $html . 'Name must be more than 2 characters';
                        die();
                    }
                    if (strlen($_POST['pass']) < 5){
                        echo $html . 'Password must be more than 6 characters';
                        die();
                    }
                        $posted_name = htmlspecialchars(trim(strtolower($_POST['name'])));
                        $posted_password = htmlspecialchars(trim($_POST['pass']));

                        $json_encoded = file_get_contents('users.json');
                        $users = json_decode($json_encoded, true);
                        foreach ($users as $user) {
                            if ($user['username'] == $posted_name) {
                                echo $html . 'User already exists';
                                die();
                            }
                        }
                        $user_id = count($users);
                        $user = ['userID' => $user_id, 'username' => $posted_name, 'password' => $posted_password, 'is_admin' => 0];
                        $users[] = $user;
                        $_SESSION['user'] = $user;
                        $_SESSION['name'] = $posted_name;
                        $json = json_encode($users);
                        file_put_contents('users.json', $json);
                        header('Location: main.php?action=profile&username=' . $_SESSION['name']);
                } else {
                    echo $html;
                }

            }
             break;
        case 'admin':
            $back = "<a href='main.php'>Back</a>";
            if (empty($_SESSION['is_admin'])){
                echo "This page is restricted for non admin users." . "<br>" . "<a href='main.php'>Back to profile</a>";
                die();
            }
                echo "<h3>Admin Page</h3>";

        if (isset($_POST['name'])) {
            $json = file_get_contents('users.json');
            $users = json_decode($json, true);
            foreach ($users as $key => $user){
                if ($user['username'] == $_POST['name']){
                    if ($user['is_admin'] == 1){
                        $users[$key]['is_admin'] = 0;
                    } else {
                        $users[$key]['is_admin'] = 1;
                    }
                    break;
                }
            }

            file_put_contents('users.json', json_encode($users));
        }
            if (isset($_POST['comment'])) {
                $json = file_get_contents('comments.json');
                $comments = json_decode($json, true);
                foreach ($comments as $key => $comment){
                    if ($comment['ID'] == $_POST['comment']){
                        if ($comment['is_public'] == 1){
                            $comments[$key]['is_public'] = 0;
                        } else {
                            $comments[$key]['is_public'] = 1;
                        }
                        break;
                    }
                }

                file_put_contents('comments.json', json_encode($comments));
            }
            if (isset($_POST['word_single'])){
                $json = file_get_contents('banlist.json');
                $words = json_decode($json, true);
                foreach ($words as $key => $word){
                    if ($word['wordSTATUS'] == $_POST['word_single']){
                        if ($word['wordSTATUS'] == 1){
                            $words[$key]['wordSTATUS'] = 0;

                        } else {
                            $words[$key]['wordSTATUS'] = 1;
                        }
                        break;
                    }
                }
                file_put_contents('banlist.json', json_encode($words));
            }
            $userList = "
                            <h4>UserList:</h4>
                                <table border='1'>
                                    <thead>
                                        <th>UserID</th>
                                        <th>Username</th>
                                        <th>Is_admin</th>
                                        <th>Make admin</th>
                                    </thead>
                                <tbody>
                            ";
            $json = file_get_contents('users.json');
            $users = json_decode($json, true);
            foreach ($users as $user) {
                $userList .= "<tr>";
                $userList .= "<td>" . $user['userID'] . "</td>";
                $userList .= "<td>" . $user['username'] . "</td>";
                $userList .= "<td>" . $user['is_admin'] . "</td>";
                $userList .= "<td><form action='' method='POST'><input type='hidden' name='name' value='$user[username]' /> ";

                if ($user['is_admin'] == 1) {
                    $userList .= "<input type='submit' value='Remove' />";
                } else {
                    $userList .= "<input type='submit' value='Add' />";
                }
                $userList .= "</form></td>";
                $userList .= "</tr>";

            }
            $userList .= "
                        </tbody>
                        </table>
                    ";
            echo $userList;

            $commentsList = "
                    <h4>Comments:</h4>
                        <table border='1'>
                            <thead>
                                <th>UserID</th>
                                <th>Comment</th>
                                <th>Date created</th>
                                <th>Status</th>
                            </thead>
                        <tbody>
                    ";

            $data = file_get_contents('comments.json');
            $comments = json_decode($data, true);
            foreach ($comments as $comment) {
                $dataWords = file_get_contents('banlist.json');
                $words_array = json_decode($dataWords, true);

                foreach ($words_array as $word_single) {
                    $comment["comment"] = str_replace($word_single["wordTEXT"],"***",$comment["comment"]);
                }
                $commentsList .= "<tr>";
                $commentsList .= "<td>" . $comment['userID'] . "</td>";
                $commentsList .= "<td>" . $comment['comment'] . "</td>";
                $commentsList .= "<td>" . $comment['date_created'] . "</td>";
                $commentsList .= "<td><form action='' method='POST'><input type='hidden' name='comment' value='$comment[ID]' /> ";

                if ($comment['is_public'] == 1) {
                    $commentsList .= "<input type='submit' value='Unpublish' />";
                } else {
                    $commentsList .= "<input type='submit' value='Publish' />";
                }
                $commentsList .= "</form></td>";
                $commentsList .= "</tr>";

            }
            $commentsList .= "
                        </tbody>
                        </table>
                    ";
            echo $commentsList;

            $wordList = "
                <h4>Forbidden words:</h4>
                <table border='1'>
                    <thead>
                        <th>wordID</th>
                        <th>wordTEXT</th>
                        <th>wordSTATUS</th>
                    </thead>
                    <tbody>
            ";
            $dataWords = file_get_contents('banlist.json');
            $words_array = json_decode($dataWords, true);

            foreach ($words_array as $word_single) {
                $wordList .= "<tr>";
                $wordList .= "<td>" . $word_single['wordID'] . "</td>";
                $wordList .= "<td>" . $word_single['wordTEXT'] . "</td>";
                $wordList .= "<td><form action='' method='POST'><input type='hidden' name='word_single' value='$word_single[wordID]'/>";

                if ($word_single['wordSTATUS'] == 1){
                    $wordList .= "<input type='submit' value='Remove' />";
                }
                $wordList .= "</form></td>";
                $wordList .= "</tr>";
            }
            if (isset($_POST['word_single'])){
                $dataWords = file_get_contents('banlist.json');
                $words_array = json_decode($dataWords, true);
                $i = 0;
                $new_words= [];
                foreach ($words_array as $word_single){
                    if ($_POST['word_single'] != $word_single['wordID']){
                        $new_words[] = ['wordID' => $i, 'wordTEXT' => $word_single['wordTEXT'], 'wordSTATUS' => 1];
                        $i++;
                    }
                }
                $json_word = json_encode($new_words);
                file_put_contents('banlist.json', $json_word);
                header('Location: main.php?action=admin');
            }

            $wordList.="</tbody></table>
                <h4>Add a banword:</h4>
                <form action='' method='POST'>
                    <input type='text' name='banWord'/>
                    <input type='submit' value='Add word'/>
                </form>
            ";

            if (isset($_POST['banWord'])){
                $posted_banword = htmlspecialchars(trim(strtolower($_POST['banWord'])));
                $word_json = file_get_contents('banlist.json');
                $words = json_decode($word_json, true);
                foreach ($words as $word) {
                    if ($word['wordTEXT'] == $posted_banword){
                        echo $wordList . "Word already exists";
                        die();
                    }
                }
                $word_id = count($words);
                $word = ['wordID' => $word_id, 'wordTEXT' => $posted_banword, 'wordSTATUS' => 1];
                $words[] = $word;
                $json_word = json_encode($words);
                file_put_contents('banlist.json', $json_word);
                header('Location: main.php?action=admin');
            } else {
                echo $wordList . '<br>' . $back . '<br>';
            }
            break;
        case 'logout':
            logout();
            header('location: main.php');
            break;
    }