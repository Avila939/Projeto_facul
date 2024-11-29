<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Sobre nós</h3>
   <p> <a href="home.php">Início</a> / Sobre nós </p>
</div>

<section class="about">

   <div class="flex">

      <div class="content">
         <h3 class=about>Sobre nós</h3>
         <p>
         Os gêneros thriller e fantasy colecionam fãs em todo o mundo, e o mercado internacional cunhou diversos termos para classificar melhor a grande variedade de histórias que esses gêneros contemplam. Os subgêneros, isto é, as classificações dentro de um gênero literário principal, delimitam com mais precisão a temática do livro e o estilo de narrativa, o que facilita a identificação e a escolha pelo leitor. E, assim como a literatura não é uma arte fechada, pode haver confluência entre mais de um subgênero, e outros ainda podem vir a ser criados.

Pensando nisso, a Trama convidou os designers Angelo Bottino e Fernanda Mello para desenvolver uma logomarca moderna e dinâmica, que acompanha uma identidade visual diferente para cada subgênero específico: ao comprar um título Trama, os leitores não levam para casa apenas um livro de mistério ou de fantasia como tantos que se encontram no mercado, mas um conceito, podendo escolher já na capa a experiência de leitura que mais lhes agrada.

“Nosso desafio, ao projetar a marca, foi atender ao pedido dos editores de fazer algo que transmitisse uma unidade explícita nas capas, mas sem perder a versatilidade e a singularidade de cada título. Nossa solução foi criar um selo que, à primeira vista, parece o mesmo — reforçando assim a identidade — mas, quando visto de perto, contém um grafismo único para cada subgênero”, explicam Bottino e Mello. “As inspirações para o partido visual vieram de ícones da cultura pop como, por exemplo, o logo da gravadora Vertigo, o da Banda Portishead e capas de livros pulp e de histórias em quadrinhos.
         </p>
         <a href="contact.php" class="btn">Contato</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="../imagens/testimonial-perfil-1.png" alt="">
         <p>Entrega rápida e atendimento perfeito</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Carla Santos</h3>
      </div>

      <div class="box">
      <img src="../imagens/testimonial-perfil-2.png" alt="">
         <p>Amei a loja. Agora, tenho meus livros em mãos muito mais rápido.Qualidade exelente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Marcos</h3>
      </div>

      <div class="box">
      <img src="../imagens/testimonial-perfil-3.png" alt="">
         <p>Amei a qualidade do livro e meu pedido chegou super rápido.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Luiza Lacerda</h3>
      </div>

      <div class="box">
      <img src="../imagens/testimonial-perfil-4.png" alt="">
         <p>É perfeita essa lojinha só da trama.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Francisco Silva</h3>
      </div>

      <div class="box">
      <img src="../imagens/mulher-sorrindo.png" alt="">
         <p>Os livros são perfeitos e a entrega é rápida.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tamires Alves</h3>
      </div>
      
      <div class="box">
      <img src="../imagens/pexels-odeani-baker-45078147-28365665.jpg" alt="">
         <p>A trama arrasou com essa loja, qualidade exelente!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Pedro Pereira</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Nossos autores</h1>

   <div class="box-container">

      <div class="box">
         <img src="../imagens/Brandon.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Brandon Sanderson</h3>
      </div>

      <div class="box">
         <img src="../imagens/cara.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Cara Hunter</h3>
      </div>

      <div class="box">
         <img src="../imagens/hanraham.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Gareth Hanraham</h3>
      </div>

      <div class="box">
         <img src="../imagens/liz.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Liz Moore</h3>
      </div>

      <div class="box">
         <img src="../imagens/Maria_Grund_LP.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Maria Grund</h3>
      </div>

      <div class="box">
         <img src="../imagens/ashley-audrain.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ashley Audrain</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="/js/script.js"></script>

</body>
</html>