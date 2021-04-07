 <?php
   $conn = mysqli_connect("localhost","root","","test1");
   session_start();

   $user_check = $_SESSION['login_user'];

   $query = "SELECT username FROM login WHERE username = |'$user_check'";
   $ses_sql = mysqli_query($conn, $query);
   $row = mysqli_fetch_assoc($ses_sql);
   $login_session = $row['username'];
?>