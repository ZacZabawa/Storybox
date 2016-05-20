<?php
// Database details
$db_server   = 'localhost';
$db_username = 'root';
$db_password = 'zab3703';
$db_name     = 'storybox';
$db_port     = '4445';


// Get job (and id)
$job = '';
$id  = '';
if (isset($_GET['job'])){
  $job = $_GET['job'];
  if ($job == 'get_users' ||
      $job == 'get_user'   ||
      $job == 'add_user'   ||
      $job == 'edit_user'  ||
      $job == 'delete_user'){
    if (isset($_GET['id'])){
      $id = $_GET['id'];
      if (!is_numeric($id)){
        $id = '';
      }
    }
  } else {
    $job = '';
  }
}

// Prepare array
$mysql_data = array();

// Valid job found
if ($job != ''){
  
  // Connect to database
  $db_connection = mysqli_connect($db_server, $db_username, $db_password, $db_name, $db_port);
  if (mysqli_connect_errno()){
    $result  = 'error';
    $message = 'Failed to connect to database: ' . mysqli_connect_error();
    $job     = '';
  }
  
  // Execute job
  if ($job == 'get_users'){
    
    // Get companies
    $query = "SELECT * FROM users ORDER BY id";
    $query = mysqli_query($db_connection, $query);
    if (!$query){
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
      $message = 'query success';
      while ($user = mysqli_fetch_array($query)){
        $functions  = '<div class="function_buttons"><ul>';
        $functions .= '<li class="function_edit"><a data-id="'   . $user['id'] . '" data-name="' . $user['name'] . '"><span>Edit</span></a></li>';
        $functions .= '<li class="function_delete"><a data-id="' . $user['id'] . '" data-name="' . $user['name'] . '"><span>Delete</span></a></li>';
        $functions .= '</ul></div>';
        $mysql_data[] = array(
          "id"          => $user['id'],
          "name"  => $user['name'],
          "email"    => $user['email'],
          "created_at"  => $user['created_at'],
          "updated_at"    => $user['updated_at'],
          "functions"     => $functions
        );
      }
    }
    
  } elseif ($job == 'get_user'){
    
    // Get user
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } else {
      $query = "SELECT * FROM users WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
        while ($user = mysqli_fetch_array($query)){
          $mysql_data[] = array(
            "id"          => $user['id'],
            "name"  => $user['name'],
            "email"    => $user['email']
            
          );
        }
      }
    }
  
  } elseif ($job == 'add_user'){
    
    // Add user
    $query = "INSERT INTO users SET ";
    
    if (isset($_GET['name'])) { $query .= "name = '" . mysqli_real_escape_string($db_connection, $_GET['name']) . "', "; }
    if (isset($_GET['email']))   { $query .= "email   = '" . mysqli_real_escape_string($db_connection, $_GET['email'])   . "', "; }
    if (isset($_GET['created_at']))   { $query .= "created_at   = '" . mysqli_real_escape_string($db_connection, $_GET['created_at'])   . "' "; }

    $query = mysqli_query($db_connection, $query);
    if (!$query){
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
      $message = 'query success';
    }
  
  } elseif ($job == 'edit_user'){
    
    // Edit user
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } else {
      $query = "UPDATE users SET ";
   
      if (isset($_GET['name'])) { $query .= "name = '" . mysqli_real_escape_string($db_connection, $_GET['name']) . "', "; }
      if (isset($_GET['email']))   { $query .= "email   = '" . mysqli_real_escape_string($db_connection, $_GET['email'])   . "' "; }
      
     
      $query .= "WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query  = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
      }
    }
    
  } elseif ($job == 'delete_user'){
  
    // Delete user
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } else {
      $query = "DELETE FROM users WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
      }
    }
  
  }
  
  // Close database connection
  mysqli_close($db_connection);

}

// Prepare data
$data = array(
  "result"  => $result,
  "message" => $message,
  "data"    => $mysql_data
);

// Convert PHP array to JSON array
$json_data = json_encode($data);
print $json_data;
?>