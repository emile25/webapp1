
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>chapsallonetjes</title>
</head>

<body class="body">
    <header>
    <nav>
            <ul>
                <li><a class="active" href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a class="active" href=""></a></li>
                <div class="login-account"><h1>login <br> account</h1></div>
            </ul>
        </nav>
</header>
    <main>



        <?php

        include("./dbcalls/conn.php");
        include('./dbcalls/read.php');


        //Het loopen van de database gegevens
        foreach ($result as $value) {
            echo '<div class="test">';
            echo '<br> <h1>productnaam:</h1> ' . $value['Productnaam'];
            echo '<br> <h1>prijs:</h1> ' . $value['Prijs'];
            echo '<br> <h1>afbeelding:</h1> ' . '<img src="' . $value['img'] . '">';
           
            echo '<form action="./dbcalls/delete.php" method="post">';
            echo '<input type="hidden" name="ID" value="' . $value['ID'] .'">';
            echo '<input type="submit" name="" value="delete" > ';
            echo '</form>';

            echo '</div>';
        }
        ?>
 <section class="kapsalon-1">
            <div class="container">
                <div class="kapsalon-shoarma">
                    <h1>Kapsalon <br> Shoarma</h1> 
                    <h2>100% kip met kaas, sla, friet,<br> tomaat en komkommer</h2>
                    <div class="container-Shoarma">
                        <img src="img/shoarma.png" alt="">
                        <div class="submit-shoarma">9,99</div>
                    </div>

                </div>
                <div class="kapsalon-kip">
                    <h1>Kapsalon <br> Kip</h1>
                    <h2>100% kip met kaas, sla, friet,<br> tomaat en komkommer</h2>
                    <div class="container-kip">
                        <img src="img/kip.png" alt="">
                        <div class="submit">9,99</div>
                    </div>

                </div>
                <div class="kapsalon-vega">
                    <h1>Kapsalon <br> Kip</h1>
                    <h2>100% kip met kaas, sla, friet,<br> tomaat en komkommer</h2>
                    <div class="container-vega">
                        <img src="img/vega.png" alt="">
                        <div class="submit-vega">9,99</div>

                </div>

            </div>
        </section>
        <section class="kapsalon-2">
            <div class="container-1">
                <div class="kapsalon-doner">
                    <h1>kapsalon <br> doner</h1>
                    <h2>100% doner met kaas, sla,<br> friet, tomaat en komkommer</h2>
                    <div class="container-doner">
                        <img src="img/doner.png" alt="">
                        <div class="submit-doner">9,99</div>
                    </div>

                </div>
                <div class="kapsalon-kebab">
                        <h1>kapsalon <br> doner</h1>
                        <h2>100% doner met kaas, sla,<br> friet, tomaat en komkommer</h2>
                        <div class="container-kebab">
                            <img src="img/kebab.png" alt="">
                            <div class="submit-kebab">9,99</div>
                        </div>  

                </div>
                <div class="kapsalon-vis">
                    <h1>kapsalon <br> doner</h1>
                        <h2>100% doner met kaas, sla,<br> friet, tomaat en komkommer</h2>
                        <div class="container-vis">
                            <img src="img/vis.png" alt="">
                            <div class="submit-vis">9,99</div>
                        </div>  

                </div>
        </section>
        <section class="combi-deals">
            <div class="container-2">
                <div class="combi-drinken">
                    <h1>combi <br> drinken</h1>
                    <h2>100% doner met kaas, sla,<br> friet, tomaat en komkommer</h2>
                    <div class="container-combi-drinken">
                        <img src="img/combi-drinken.png" alt="">
                        <div class="submit-combi-drinken">9,99</div>
                    </div>  

                </div>
                <div class="combi-ijs">
                        <h1>combi <br> ijs</h1>
                        <h2>100% doner met kaas, sla,<br> friet, tomaat en komkommer</h2>
                        <div class="container-combi-ijs">
                            <img src="img/combi-ijs.png" alt="">
                            <div class="submit-combi-ijs">9,99</div>
                        </div>  
                    
                </div>
                <div class="friet-deal">
                    <h1>friet <br> deal</h1>
                    <h2>100% doner met kaas, sla,<br> friet, tomaat en komkommer</h2>
                    <div class="container-friet-deal">
                        <img src="img/friet.png" alt="">
                        <div class="submit-friet-deal">9,99</div>

                </div>
            </div>
        </section>

    <footer>

    </footer>
</body>

</html>