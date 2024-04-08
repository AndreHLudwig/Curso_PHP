<?php
    require_once("templates/header.php");
    require_once("models/User.php");
    require_once("dao/UserDAO.php");

    $user = new User();
  $userDao = new UserDao($conn, $BASE_URL);

  $userData = $userDao->verifyToken(true);

  $fullName = $user->getFullName($userData);

//   if($userData->image == "") {
//     $userData->image = "user.png";
//   }

?>

 <div id="main-container" class="container-fluid">
    <h1>Edição de Perfil</h1>
</div>

<?php
    require_once("templates/footer.php");
?>
    