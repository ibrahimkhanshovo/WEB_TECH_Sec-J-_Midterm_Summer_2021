<?php
    session_start();
    if(isset($_POST['current']) && isset($_POST['new']) && isset($_POST['cnp']))
    {
        $currentPass1 = $_POST['current']; // old password
        $newPass = $_POST['new']; // new password
        $cnewpass = $_POST['cnp']; // comfirm new password
        if( $_SESSION['password'] == $currentPass1 )
        {
            if($newPass == $cnewpass)
            {
            $data = file_get_contents('./data.json');
            $myJSON = json_decode($data, true);

            foreach($myJSON as $key=>$user)
            {
            if($user['username'] == $_SESSION['username'])
            {
                $myJSON[$key]['password'] = $_POST['new'];
                $newJSON = json_encode($myJSON);
                file_put_contents('./data.json', $newJSON);
                $_SESSION['password'] = $_POST['new'];   
                echo "Success";
            }
            }
            }
            else
            {
                echo "password did not match";
            }
        }
        else
        {
            echo "old password did not match";
        }        
    }
    else
    {
        echo "one of the fields are empty";
    }
?>