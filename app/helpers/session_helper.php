<?php

session_start();

function alert($message, $class)
{
    // Basic style classes
    // - alert-success
    // - alert-info
    // - alert-warning
    // - alert-danger

    $_SESSION['alert'] = '<div class="alert ' . $class . '" id="alert">' . $message . '</div>';
}

function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}

// // Function to check and handle user inactivity
// function checkUserActivity()
// {
//     $inactiveTimeout = 1800; // 1 mins in seconds

//     // Check if the last activity timestamp is set
//     if (isset($_SESSION['last_activity'])) {
//         $elapsedTime = time() - $_SESSION['last_activity'];

//         // If elapsed time exceeds the timeout, log out the user
//         if ($elapsedTime > $inactiveTimeout) {

//             // Require the model file
//             require_once APP_ROOT . '/models/UserLogin.php';
//             // Instantiate model
//             $userlogin = new UserLogin();

//             if ($userlogin->update_user_log($_SESSION['user_id'])) {
//                 session_unset();
//                 session_destroy();
//                 redirect("auth/login");
//                 exit();
//             } else {
//                 die("Something went wrong");
//             }
//             // redirect("auth/login");
//             // exit();
//         }

//     }

//     if (!isLoggedIn()) {
//         redirect('auth/login');
//         exit();
//     }
//     // Update the last activity timestamp
//     $_SESSION['last_activity'] = time();
// }

function end_session()
{
    session_unset();
    session_destroy();
    redirect("auth/login");
    exit();
}

// function log_user_activity($activity_type, $activity_description)
// {
//     // Require the model file
//     require_once APP_ROOT . '/models/UserLogin.php';
//     // Instantiate model
//     $userlogin = new UserLogin();

//     if ($userlogin->create_user_activity_log($_SESSION['user_id'], $activity_type, $activity_description)) {
//         // Success
//     } else {
//         die("Something went wrong");
//     }
// }