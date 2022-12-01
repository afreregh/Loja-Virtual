<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
    <link rel="stylesheet" href="https://path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Pesquisar</title>
    <!-- Style -->
    <style>
      .light {
        --mainColor: #8164f4;
        --hoverColor: #5b5fdf;
        --backgroundColor: #f1f8fc;
        --darkOne: #222;
        --darkTwo: #45424b;
        --lightOne: #919191;
        --lightTwo: #222;
      }

      .dark {
        --mainColor: #4c3bbe;
        --hoverColor: #5b64df;
        --backgroundColor: #1a193a;
        --darkOne: #f3f3f3;
        --darkTwo: #fff;
        --lightOne: #ccc;
        --lightTwo: #e7e3e3;
      }


      *,
      *::before,
      *::after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Century Gothic", sans-serif;
        overflow: hidden;
      }

      a{
        text-decoration: none;
      }

      img {
        width: 100%;
        margin-left: -20px;
      }

      .wrapper{
        position: relative;
        padding: 1.7rem 0 2rem;
        width: 100%;
        height: 100vh;
        overflow: scroll;
        background-color: var(--backgroundColor);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .container{
        position: relative;
        max-width: 80rem;
        width: 100%;
        margin: 0 auto;
        padding: 0 3rem;
        z-index: 10;
      }

      header{
        position: relative;
        z-index: 70;
      }

      header .container{
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .logo{
        display: flex;
        align-items: center;
        cursor: pointer;
      }

      .logo h3 {
        color: var(--darkTwo);
        font-size: 1.55rem;
        line-height: 1.2;
        font-weight: 700;
      }

      .links ul {
        display: flex;
        list-style: none;
        align-items: center;
        margin-right: 30px;
      }

      .links a{
        color: var(--lightTwo);
        margin-left: 4.5rem;
        display: inline-block;
        transition: 0.3s;
      }

      .links a:hover{
        color: var(--hoverColor);
        transform: scale(1.05);
      }

      .btn {
        display: inline-block;
        padding: 0.9rem 1.9rem;
        background-color: var(--mainColor);
        border-radius: 50px;
        text-transform: capitalize;
        transition: 0.3s;
        color: #fff !important;
        border-bottom-left-radius: 0px;
      }

      .btn:hover {
        background-color: var(--hoverColor);
        transform: scale(1) !important;
      }

      .overlay{
        display: none;
      }

      .hamburger{
        position: relative;
        z-index: 99;
        width: 2rem;
        height: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin-right: 25px;
        display: none;
      }

      .hamburger .bar {
        position: relative;
        width: 100%;
        height: 3px;
        background-color: var(--darkTwo);
        border-radius: 3px;
        transition: 0.5s;
      }

      .bar::before,
      .bar::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: var(--darkTwo);
        border-radius: 3px;
        transition: 0.5s;
      }

      .bar::before{
        transform: translateY(-8px);
      }

      .bar::after{
        transform: translateY(8px);
      }

      .wrapper.active .hamburger .bar {
        background-color: transparent;
      }

      .wrapper.active .bar::before {
        transform: translateY(0) rotate(-45deg);
      }
      .wrapper.active .bar::after {
        transform: translateY(0) rotate(45deg);
      }

      .content-area .container {

        display: grid;
        grid-template-columns: repeat(1, 1fr);
        align-items: center;
        justify-content: center;
        
      }

      .title h1{
        font-size: 22px;
        color: var(--darkOne);
        text-transform: capitalize;
        line-height: 1.4;
        margin-top: 50px;
      }

      .title h2{
        font-size: 22px;
        color: var(--darkOne);
        text-transform: capitalize;
        line-height: 1.4;
      }

      .text{
        color: var(--lightOne);
        font-size: 1.1rem;
        margin: 1.9rem 0 2.5rem;
        max-width: 600px;
        line-height: 2.3;
      }

      .subtitle{
        font-size: 20px;
        color: var(--darkOne);
        text-transform: capitalize;
        line-height: 1.4;
        margin-left: 2px;
        border-bottom: 1px solid var(--darkOne);
        padding-bottom: 4px;
        margin-top: 20px;
        width: 300px;
      }

      .shape{
        position: absolute;
        z-index: 0;
        width: 900px;
        bottom: -80px;
        left: -120px;
        opacity: 0.2;
      }

      .toggle-btn{
        position: absolute;
        top: 5px;
        right: 15px;
        display: inline-block;
        border: none;
        background: var(--darkTwo);
        color: var(--backgroundColor);
        outline: none;
        cursor: pointer;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 1.1rem;
        transition: 0.3s;
        z-index: 100;
      }

      .toggle-btn i {
        line-height: 39px;
      }

      .toggle-btn:hover {
        background: var(--mainColor);
        color: #fff;
      }

      .wrapper.light .toggle-btn i:last-child{
        display: none;
      }
      .wrapper.light .toggle-btn i:first-child{
        display: block;
      }
      .wrapper.dark .toggle-btn i:last-child{
        display: block;
      }
      .wrapper.dark .toggle-btn i:first-child{
        display: none;
      }

      .copy {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 100;
        animation: flow 1s 1 both;
      }

      .search{
        display: flex;
        flex-direction: row;
      }
      .border-input{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0.9rem 1.9rem;
        background-color: var(--mainColor);
        border-radius: 50px;
        text-transform: capitalize;
        transition: 0.3s;
        color: #fff !important;
        border-bottom-left-radius: 0px;
        margin-right: 10px;
      }
      .search-input{
        width: 600px;
        height: 30px;
        border: none;
        margin: 5px;
        outline: none;
      }
      .search-input::placeholder{
        outline: none;
        color: #2E2E2E;
        font-weight: 500;
        padding-left: 20px;
      }
      .barra{
        margin-left: 10px;
        border: 1px solid #fff;
        height: 23px;
      }
      .icon{
        margin-left: 10px;
        font-size: 20px;
      }

      footer{
        margin-top: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: var(--darkTwo);
      }

      @keyframes flow {
        0%{
          clip-path: circle(30% at -25% -25%);
        }
        100%{
          clip-path: circle(175% at 0 0);
        }
      }

      @media screen and (max-width: 870px) {
        .hamburger{
          display: flex;
          top: 10px;
        }
        .links {
          position: fixed;
          top: 0;
          right: 0;
          max-width: 450px;
          width: 100%;
          height: 100%;
          background-color: var(--mainColor);
          z-index: 95;
          display: flex;
          align-items: center;
          justify-content: center;
          transform: translate(100%);
          transition: 0.5s;
        }
        .links ul {
          flex-direction: column;
        }
        .wrapper.active .links {
          transform: translateX(0);
          box-shadow: 0 0 50px 2px rgba(0, 0, 0, 0.4);
        }
        .overlay{
          display: block;
          position: fixed;
          inset: 0;
          background-color: rgba(0, 0, 0, 0.7);
          opacity: 0;
          pointer-events: none;
          transition: 0.5s;
        }
        .links a {
          color: #fff;
          margin-left: 0;
          padding: 2rem 0;
        }
        .links .btn {
          background: none;
        }
        .content-area .container {
          display: grid;
          grid-template-columns: repeat(1, 1fr);
          align-items: center;
          justify-content: center;
        }

        .title {
          font-size: 1.1rem;
        }
        .text{
          font-size: 0.95rem;
          margin: 1.4rem 0 1.5rem;
        }
        .subtitle{
          font-size: 25px;
          color: var(--darkOne);
          text-transform: capitalize;
          line-height: 1.4;
          margin-left: 2px;
          border-bottom: 1px solid var(--darkOne);
          padding-bottom: 4px;
        }
        .clothes {
          width: 100%;
          transform: none;
        }
        .logo h3 {
          font-size: 1.25rem;
        }
        .shape{
          bottom: -330px;
          left: -375px;
        }

        footer{
          margin-top: 20px;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-left: 20px;
          text-align: center;
        } 
      }

      @media screen and (max-width: 470px) {
        .container {
          padding: 0 1.5rem;
        }
        .hamburger{
          display: flex;
          top: 10px;
          margin-right: 50px;
        }
        .title {
          font-size: 0.9rem;
        }
        .text{
          margin: 1.1rem 0 1.5rem;
        }
        .subtitle{
          font-size: 25px;
          color: var(--darkOne);
          text-transform: capitalize;
          line-height: 1.4;
          margin-left: 2px;
          border-bottom: 1px solid var(--darkOne);
          padding-bottom: 4px;
        }
        .shape{
          display: none;
        }
        footer{
          margin-top: 20px;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-left: 20px;
          text-align: center;
        } 
      }

    </style>

  </head>
  <body>

    <!-- Header -->
    <main>
      <div class="wrapper light">
        <header>

          <button class="toggle-btn">
            <i class='bx bxs-moon'></i>
            <i class='bx bxs-sun' ></i>
          </button>
          
          <div class="container">
            <div class="logo">
              <h3>Loja Virtual</h3>
            </div>

            <div class="links">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Vitrine.php">Vitrine</a></li>
                <li><a href="Sobre.php">Sobre</a></li>
                <li><a href="Contatos.php">Contatos</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="login.php" class="btn">Entrar</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger">
              <div class="bar"></div>
            </div>

          </div>
        </header>

        <div class="content-area">
          <div class="container">
            <div>
              <div class="title">
                <h1>Bem - vindo à</h1>
                <h2>Página de Busca</h2>
              </div>
              <h2 class="subtitle">Sobre a Loja</h2>
              <p class="text">
                Pesquise abaixo os produtos que esta procurando!
              </p>
              <form>
                <div class="search">
                  <div class="border-input">
                    <input type="search" class="search-input" placeholder="Buscar Produtos ..."><div class="barra"></div>
                    <i class="uil uil-search icon"></i>
                  </div>
                </div>
              </form>
            </div>  
          </div>
        </div>

        <img src="images/shape.png" alt="" class="shape">
        <footer>
          <p><i class="uil uil-copyright" style="margin-right: 5px;"></i>Copyright - Todos os direitos reservados. Esta loja foi desenvolvida pelo <b style="color: var(--mainColor);">NetWork Online</b> - 2022.</p>
        </footer>
      </div>
    </main>
     
    
    <!-- Script -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script>
      var toggle_btn;
      var wrapper;
      var hamburger_menu;

      function declare() {
        toggle_btn = document.querySelector(".toggle-btn");
        wrapper = document.querySelector(".wrapper");
        hamburger_menu = document.querySelector(".hamburger");
      }

      declare();

      const main = document.querySelector("main");

      let dark = false;

      function toggleAnimation() {
        // Clone the wrapper
        dark = !dark;
        let clone = wrapper.cloneNode(true);
        if (dark) {
          clone.classList.remove("light");
          clone.classList.add("dark");
        }else {
          clone.classList.remove("dark");
          clone.classList.add("light");
        }

        clone.classList.add("copy");
        main.appendChild(clone);

        clone.addEventListener("animationend", () => {

          wrapper.remove();
          clone.classList.remove("copy");
          // Reset Variables
          declare();
          events();
        });

      }

      /*==================== Toggle Event ====================*/
      function events() {
        toggle_btn.addEventListener("click", toggleAnimation);
        hamburger_menu.addEventListener("click", () => {
          wrapper.classList.toggle("active");
        });
      }

      events();

    </script>

    <script>
      let count = 1;
        document.getElementById("radio1").checked = true;

        setInterval( function(){
          nextImage();
      }, 5000)

      function nextImage(){
        count++;
        if(count>4){
          count = 1;
        }

        document.getElementById("radio"+count).checked = true;

      }
  </script>
    <!-- Footer -->
    <footer>
      
    </footer>
    
  </body>
</html>