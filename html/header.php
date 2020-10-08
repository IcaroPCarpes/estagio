<html>
    <head>
        <link rel="stylesheet" href="../css/header.css">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    </head>
    <body>
        <header>
       
        
            <div id='header'>
            <div id='menusuperior'>
                    <a id='botao1' href='home.php'>Home</a>    
                    <?php
                    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
                    {
                        echo " <a id='' href='login.php'>Login</a>";
                    }
                    else{
                        echo "<a href='Logoff'>Logoff</a>";
                    }
                    ?>
                </div>   
            <div id='titulo'><p id='mecanica'>Mecânica<br>  Oliveira</p></div>
            </div>
        </header>
    </body>

</html>


