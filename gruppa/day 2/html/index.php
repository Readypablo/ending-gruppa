




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" >

    <title>Document</title>
</head>

<body>


    <header>
        <a href="index.php" class="silk_header">
            <p>ГЛАВНАЯ</p>
        </a>
        <a href="legenda.php" class="silk_header">
            <p>ЛЕГЕНДА </p>
        </a>
        <a href="other.php" class="silk_header">
            <p>О НАС</p>
        </a>

    </header>

    <main>



        <div class="flex">

            <div class="text_left">
                <p class="big_text">ВОТ ОН ПЕРЕД ВАМИ</p>
                <P class="loremipsum">Lorem Ipsum - это текст-"рыба", часто используемый<br> в печати и вэб-дизайне. Lorem Ipsum<br> является стандартной "рыбой" для текстов на <br>латинице с начала XVI века.</P>
            </div>


            <div class="img_right">
                <img src="../img/123.jpg" id="artur_foto">
            </div>

        </div>


        <div class="black_fon">

            <div class="logo_text">
                <p> ОНИ НЕ ИДЕАЛ</p>
            </div>

            <div class="line_left">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum has been<br> the Lorem Ipsum has beenindustry's Lorem Lorem standard Lorem Ipsum has been dummy</p>
            </div>

            <div class="line_right">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum has been<br> the Lorem Ipsum has beenindustry's Lorem Lorem standard Lorem Ipsum has been dummy</p>
            </div>
            <div class="line_left">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum has been<br> the Lorem Ipsum has beenindustry's Lorem Lorem standard Lorem Ipsum has been dummy</p>
            </div>

            <div class="line_right">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum has been<br> the Lorem Ipsum has beenindustry's Lorem Lorem standard Lorem Ipsum has been dummy</p>
            </div>

            <div class="line_left">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum has been<br> the Lorem Ipsum has beenindustry's Lorem Lorem standard Lorem Ipsum has been dummy</p>
            </div>

            <div class="line_right">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum has been<br> the Lorem Ipsum has beenindustry's Lorem Lorem standard Lorem Ipsum has been dummy</p>
            </div>


        </div>
        <h1 class="center-text">ОБЩАЯ СТАТИСТИКА</h1>
        <div class="block-iq">

            <div class="black-block-iq">
                <p><span>+ 84</span><br>Хромосомы на всю группу</p>
            </div>

            <div class="white-block-iq">
                <p><span>1</span><br>НЕГР только в группе </p>
            </div>

            <div class="black-block-iq">
                <p><span>- 42</span><br>IQ в общей сумме группы</p>
            </div>

        </div>





        <div class="carousel-3d">
            <figure>
                <div>
                    <a href="#any"><img src="../img/imgonline-com-ua-Resize-oAio5bg7oadfu.jpg" width="1000px" height="400px" alt="" /></a>
                </div>

                <div>
                    <a href="#any"><img src="../img/156.jpg" alt="" width="1000px" height="400px" /></a>
                </div>

                <div>
                    <a href="#any"><img src="../img/157.jpg" alt="" width="1000px" height="400px" /></a>
                </div>

                <div>
                    <a href="#any"><img src="../img/158.jpg" alt="" width="1000px" height="400px" /></a>
                </div>

                <div>
                    <a href="#any"><img src="../img/59.jpg" alt="" width="1000px" height="400px" /></a>
                </div>

                <div>
                    <a href="#any"><img src="../img/60.jpg" alt="" width="1000px" height="400px" /></a>
                </div>

            </figure>
            <nav>
                <button class="nav prev">Назад</button>
                <button class="nav next">Вперед</button>
            </nav>
        </div>



        <h1 class="middle-text">У НАС ЕСТЬ</h1>

        <div class="flex-1">
            <div class="kvadrat-urodi">
                <img src="https://sun9-west.userapi.com/sun9-6/s/v1/ig2/JhfPyWCY150MMO3afcE64sIxEGbvJNbxki0H8dDDalVItWJ4n6y6WAXUICF0AYhIUI6HqstrF-x7Mnh6e0Xo2mTR.jpg?size=1620x2160&quality=96&type=album" alt="" class="kvadrat-img-urod" width="280px" height="280px">
                <p class="text-relativ"> KРАСАВЦЫ</p>
            </div>
            <div class="kvadrat-urodi">
                <img src="../img/2.jpg" class="kvadrat-img-urod" width="280px" height="280px">
                <p class="text-relativ"> ZА ЗОЖ</p>
            </div>
            <div class="kvadrat-urodi">
                <img src="../img/3.jpg" alt="" class="kvadrat-img-urod" width="280px" height="280px">
                <p class="text-relativ">TОРМОЗИЛЫ</p>
            </div>
            <div class="kvadrat-urodi">
                <img src="../img/4.jpg" alt="" class="kvadrat-img-urod" width="280px" height="280px">
                <p class="text-relativ">WПОПИКИ</p>
            </div>
        </div>

        <h1 class="middle-text">Список всех(наверное)</h1>

<div style="display: flex;
    justify-content: center;">
    
<input id="321" type="button" value="хотите их увидеть?" onclick="hidetext()" style="flex: 0 0 auto;
    margin: 0 5px;
    cursor: pointer;
    color: black;
    background: white;
    border: 1px solid black;
    width: 200px;
    height: 50px;
    padding: 5px 10px;
    font-weight: bold;
    transition: all .3s ease;">
   
<!-- сокрытие кнопки и открытие имен -->
    <script>
        function hidetext(){
            bbb = document.getElementById("123");
            ppp = document.getElementById("321");
            bbb.style.display = "block";
            ppp.style.display = "none";
        }
    </script>   


    <div  id="123"  style=" display: none;  text-align: left;  font-size: 20px; margin: 20px; color: black; ">

<!-- вывод студентов -->
        <?php 
        $lines = file('name_stud.txt');

        foreach ($lines as $line_num => $line) {
            echo  htmlspecialchars($line) . "<br>\n";
        }?>
    </div>
</div>


<!-- спрашивает пользователя хочет ли он покинуть страницу -->
<script >
    window.onbeforeunload = function() {
    return "Don't leave me!";
};
</script>



    </main>


    <!-- типо загрузка страницы -->

    <div id='preloader'>
        <img src="../img/gifka.gif" alt="preloader">
    </div>


    <audio controls id="index-audio"> 
        <source src="../img/Shadowraze - showdown.mp3" type="audio/mpeg">
    </audio>


</body>
<script src="../js/script.js"></script>

</html>