<?php
    
    function get_message()
    {
        include("conn.php");

        $error = NULL;

        $success = false;
        
        if (isset($_POST['from']))
        {
            $from = mysqli_real_escape_string($conn, $_POST['from']);
        }
        else
        {
            $error = 'The from variable was not set';
        }
       
        if (isset($_POST['message']))
        {
            $message = mysqli_real_escape_string($conn,$_POST['message']);
        }
        else
        {
            $error = 'The message variable was not set';
        }
      
        if (isset($_POST['secret']))
        {
            $secret = mysqli_real_escape_string($conn,$_POST['secret']);
        }
       
        if(isset($_POST['sent_timestamp']))
        {
            $sent_timestamp = mysqli_real_escape_string($conn,$_POST['sent_timestamp']);
        }
      
        if (isset($_POST['sent_to']))
        {
            $sent_to = mysqli_real_escape_string($conn,$_POST['sent_to']);
        }
       
        if (isset($_POST['message_id']))
        {
            $message_id = mysqli_real_escape_string($conn,$_POST['message_id']);
        }
        
        if (isset($_POST['device_id']))
        {
            $device_id = mysqli_real_escape_string($conn,$_POST['device_id']);
        }
      

        if ( ( $secret == '123456'))
            {
                $success = true;

                include("check.php");
                
            }
        
    }

    get_message();
	?>