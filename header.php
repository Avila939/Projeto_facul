<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="https://www.facebook.com/editoratrama" class="fab fa-facebook-f"></a>
            <a href="https://x.com/editoratrama" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/editoratrama/" class="fab fa-instagram"></a>
         </div>
         <p> Novo <a href="login.php">login</a> | <a href="register.php">registro</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">TRAMA</a>

         <nav class="navbar">
            <a href="home.php">Início</a>
            <a href="about.php">Sobre nós</a>
            <a href="shop.php">Livros</a>
            <a href="contact.php">Contato</a>
            <a href="orders.php">Pedido</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">sair</a>
         </div>
      </div>
   </div>

</header>