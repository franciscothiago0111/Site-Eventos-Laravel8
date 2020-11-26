<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title')</title>

   
       
        
        <link rel="stylesheet" href="/css/styles.css">     
        <script  src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
      
      <nav>
              <div class="menu-icon">
        <span class="fas fa-bars"></span></div>
        <div class="logo"><a href="#">MyEvents</a></div>

             </div>
        <div class="nav-items">      
        <li><a href="#">Postar Evento</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Criar Conta</a></li>
        <li><a href="#">Contato</a></li>
        </div>
        <div class="search-icon">
        <span class="fas fa-search"></span></div>
        <div class="cancel-icon">
        <span class="fas fa-times"></span></div>
        <form action="#">
                <input type="search" class="search-data" placeholder="Procurar Eventos" required>
                <button type="submit" class="fas fa-search"></button>
              </form>
</nav>

  
      
      @yield('content')




      
      <footer>
      <div class="main-content">
        <div class="left box">
          <h2>
About us</h2>
<div class="content">
            <p>
CodinNepal is a YouTube channel where you can learn web designing, web development, ui/ux designing, html css tutorial, hover animation and effects, javascript and jquery tutorial and related so on.</p>
<div class="social">
              <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
            </div>
</div>
</div>
<div class="center box">
          <h2>
Address</h2>
<div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Birendranagar, Surkhet</span>
            </div>
<div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+089-765432100</span>
            </div>
<div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">abc@example.com</span>
            </div>
</div>
</div>
<div class="right box">
          <h2>
Contact us</h2>
<div class="content">
            <form action="#">
              <div class="email">
                <div class="text">
Email *</div>
<input type="email" required>
              </div>
<div class="msg">
                <div class="text">
Message *</div>
<!-- NOTE: Due to more textarea tag I got an error. So I changed the textarea name to changeit. Please change that changeit name to textarea -->
<input id=".msgForm" rows="2" cols="25" required></input> <!-- replace this changeit name to textarea -->
              
              <br />
<div class="btn">
<button type="submit">Send</button>
              </div>
<div class="bottom">
       <center>
          <span class="credit">Created By <a href="https://youtube.com/c/codingnepal">CodingNepal</a> | </span>
          <span class="far fa-copyright"></span> 2020 All rights reserved.
        </center>
</div>
      </footer>

      <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
  </script>

 
      
    </body>
</html>