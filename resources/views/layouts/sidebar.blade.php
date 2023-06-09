<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body style="margin:0px">
    <header class="flex space-between" style="display:flex; padding:15px; background-color:white; box-shadow: 1px 12px 9px -8px rgba(0,0,0,0.24);
-webkit-box-shadow: 1px 12px 9px -8px rgba(0,0,0,0.24);
-moz-box-shadow: 1px 12px 9px -8px rgba(0,0,0,0.24);  background-color:#00995D; align-items:center;">
        <img style="width:100px;height:30px;" src="./img/logo.png" alt="Logo">
        <form action="/logout" method="post" style="display:flex; align-items:center; margin-bottom:0px;">
            @csrf
            <button style="background-color: transparent; border-color:transparent;"><img src="./img/logout.png" alt="sair" style="width:30px"></button>
        </form>
    </header>

    <div>
        <div style="display: flex;">
            <nav id="menu-nav" style="margin:0px 0px; position: absolute; background-color:white; height: 100vh; width:200px; display:none; -webkit-box-shadow: 5px 1px 5px -1px rgba(0,0,0,0.17);
-moz-box-shadow: 5px 1px 5px -1px rgba(0,0,0,0.17);
box-shadow: 5px 1px 5px -1px rgba(0,0,0,0.17);   top: 0;
  left: 0;

  height: 100%; background-color:#00995D; color:white">
                <ul style="list-style: none;">
                    <li>
                        <a href="/home" style="color: white; text-decoration:none;">
                            <h4 style="font-weight: normal;">Menu Principal</h4>
                        </a>
                    </li>
                    <!--<li>
                        <a href="#dados" style="color:white; text-decoration:none;">
                            <h4 style="font-weight: normal;">Meus Dados</h4>
                        </a>
                    </li>-->
                </ul>
            </nav>

            <div style="display:flex; align-content:center; background-color:white; height:50px; width:100%; align-items:center;">
                <!--<button  onclick="showMenu()" >Menu</button>-->
                <img id="menu-button" src="./img/menu.png" style="height: 25px; margin-left:15px;" onclick="showMenu()">
                <h4 style="margin:0px; margin-left:10px; font-weight:100;">INFORMAÇÕES ATUALIZADAS ATÉ MAR/23</h4>
            </div>
        </div>

        <section style="margin:10px 10px">
            @yield('conteudo')
        </section>
    </div>

    <style>
        .flex {
            display: flex;
        }

        .space-between {
            justify-content: space-between;
        }
    </style>

    <script>
        var menuButton = document.getElementById("menu-button");
        var menuNav = document.getElementById("menu-nav");
        var navbar = document.getElementById("navbar");
        document.addEventListener("click", function(event) {
            if (event.target != menuNav && event.target != menuButton) {
                menuNav.style.display = "none";
                navbar.style.display = "none";
            }
        });

        function showMenu() {
            var menuNav = document.getElementById("menu-nav");
            if (menuNav.style.display == "block") {
                menuNav.style.display = "none";
            } else {
                menuNav.style.display = "block";
            }
        }
    </script>
</body>

</html>