<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include 'config.php';

if(isset($_SESSION) == false){
    header('Location:DIR_loginFuncp');
}

$nomeUsuario = $_SESSION['userName'];

include TEMPLATE_BASE.'/head.php';

include TEMPLATE_BASE.'/nav.php';
?>
<link rel="stylesheet" href="<?php echo URL_BASE?>/csspaginas/chws.css" alt="">
</head>
<body>
    <div class="row">

    <div class="divs col l3 hide-on-med-and-down centralizar" id="left" >
    <span class="grey-text darken-2 flow-text "><strong>Menu de Chats</strong> </span>

      <div class="row col l10 offset-l1">
<div class="col l12 bordinha ">
<img src="https://pic.clubic.com/v1/images/1715435/raw" alt="" class="responsive-img bordinha" >
<span class="orange-text darken-4 flow-text ">League of Legends</span><br>
<div class="dropdown-trigger blue lighten-2" data-target='dropdown2'>
  <span class="black-text lighten-2"><strong>Ver lobbys<i class="material-icons">expand_more</i></strong></span>
</div>
      </div>
      </div> 
    </div>
  
    <ul id='dropdown2' class='dropdown-content'>
    <li><a href="#!" class="centralizar">Lobby 1</a></li>
    <li><a href="#!" class="centralizar">Lobby 2</a></li>
    <li><a href="#!" class="centralizar">Lobby 3</a></li>
    <li><a href="#!" class="centralizar">Lobby 4</a></li>
    <li><a href="#!" class="centralizar">Lobby 5</a></li>
    </ul>

<script>


  document.addEventListener('DOMContentLoaded',function drop() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
    }

   
  );</script>

    <div class="divs col s12 l6" >    
    <iframe src="./chat/src/index.php" id="iframes" ></iframe>
    </div>

    <div class="col l3 hide-on-small-only">
    <ul class="collection hide-on-med-and-down" id="right" >
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
   
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
   
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
   
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">PatinhoDaShiroDF</p> 
    </li>
   
   
   
    
  </ul>
    </div>

    </div>
</body>