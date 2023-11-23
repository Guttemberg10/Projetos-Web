<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/css.css">
    <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
    <title>Folk Fighter</title>
</head>
<body>

    <div class="nave">
        <div class="imglogo">
        <img class="imglogo1 " src="imagens/logo.png" alt="Folk Fighter" title="Folk Fighter">
        </div>
        <div class="nav1">
            <nav>
                <ul>
                    <li> <a class="s1" href="#folk_fighter"> Folk Fighter </a> </li>
                    <li> <a class="s1" href="#personagem"> Personagem </a> </li>
                    <li> <a class="s1" href="#vedio"> Gameplay </a> </li>
                    <li> <a class="s1" href="#sobre_nois"> Sobre  Nós</a> </li>
                    <li> <a class="s1" href="#">Em Breve...</a> </li>
                </ul>
            </nav>
        </div>
        <div class="outros">
            <div class="divao_login">
                <button class="btlog" style="width: 120px;">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="divinha_login">

                    <a id="ancora_perfil" href="
                    <?php
                        if($_SESSION['logado'] != 1){
                            echo "cadastro.php";
                            $_SESSION['logado'] = 0;
                        }else{
                            $_SESSION['logado'] = 1;
                            echo "perfil.php";
                        }
                        ?>" class="login">Perfil</a>
                        
                    <a class="login" id="ancora_download" href="
                    <?php
                        if($_SESSION['logado'] != 1){
                            echo "cadastro.php";
                            $_SESSION['logado'] = 0;
                        }else{
                            $_SESSION['logado'] = 1;
                            echo "download.html";
                        }
                        ?>">
                    Download</a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="gifprin" id="folk_fighter">
    </div>

    <div class="info1">
        <div class="tinfo1">
            <div class="canto"></div>
            <div class="meio">
                <p class="infot">Sua lenda começa agora</p>
            </div>
            <div class="canto2"></div>


        </div>

        <div class="tinfo2">
            <div class="teste">
                <div class="cant"></div>
                <div class="mei">
                    <p class="p1">Explore um mundo repleto de mistério e mitologia,</p>
                    <p class="p2">onde lendas do folclore ganham vida no Folk Fighter</p>
                    <p class="p3">Você está pronto para enfrentar o inimaginável?</p>
                </div>
                <div class="cant2"></div>

            </div>
            <div class="teste2">


                <p class="p4">Sua lenda começa agora</p>

            </div>
        </div>
    </div>

    <div class="info2">
        <div class="cont1">
            <center>
                <div class="sla1"></div>
                <div class="sla2"></div>
            </center>

            <div class="cont2">
                <p style=" font-family: 'Russo One', sans-serif; color: white; font-size: 6.4em; text-align: center;">Só os mais corajosos sobreviverão</p>
                <br>
                <br>
                <p style=" font-family: 'Russo One', sans-serif; color: white; font-size: 3em; text-align: center;">Enfrente criaturas lendárias e monstros </p>
                <p style=" font-family: 'Russo One', sans-serif; color: white; font-size: 3em; text-align: center;">folclóricos em uma jornada emocionante</p>
            </div>
        </div>


    </div>

    <div class="info3">

        <div class="parte1">
            <div class="canto_parte1"></div>
            <div class="meio_parte1"></div>



            <div class="image_notebook" data-anime="left"  >
                <img src="imagens/note-removebg-preview.png" class="notebook" alt="" >
            </div>
            <div class="imagem_dos_personagens" >
            </div>
        </div>

        <div class="parte2">
            <div class="texto_parte2">
                <p class="texto_parte2">HERÓIS LENDÁRIOS</p>
            </div>
        </div>

        <div class="parte3">
            <p class="texto_parte3_1" style="margin-right:30px;">Junte-se à batalha das lendas <br>
            e prove  O Folk Fighter espera por você!<br>
            que você é digno de ser o mestre do folclore.</p>
        </div>
    </div>

    </div>

    <div class="info4">
        <div class="parte1_info4">

            <div class="info_personagem1" data-anime="left">
            </div>
            <div class="info_personagem2">
            </div>
            <div class="info_personagem3">
            </div>
        </div>

        <div class="parte2_info4">
            <div class="muda_personagem" id="personagem">
              
            </div>

            <div class="info_muda_personagem">
                <p style="font-family: 'Russo One', sans-serif; font-size: 4.4em; color: white;">Quem reinará no supremo Folk Fighter?</p>
                <br>
                <br>
                <br>
                <p style="font-family: 'Russo One', sans-serif; font-size: 2.4em; color: white;">Conheça criaturas folclóricas de 
                 </p>
                <p style="font-family: 'Russo One', sans-serif; font-size: 2.4em; color: white;">todos os cantos do mundo e prove</p>
                <p style="font-family: 'Russo One', sans-serif; font-size: 2.4em; color: white;">que sua lenda é a mais poderosa</p>
            </div>
        </div>
    </div>

    <div class="info5">
        
        <div class="parte1_info5">
            <div class="perso1" style="background-color: transparent;width:400px; border-radius: 19px;"><img src="imagens/curupira2.png"style="width: 420px; height:420px; po " alt=""></div>
            <div class="perso1" style="background-color:transparent;width:400px; border-radius: 19px;"><img src="imagens/cuca2.png"style="width: 420px; height:420px; po " alt=""></div>
            <div class="perso1" style="background-color: transparent;width:400px; border-radius: 19px;"><img src="imagens/wendigo_avatar2.png"style="width: 420px; height:420px; po " alt=""></div>
            <div class="perso1" style="background-color:transparent;width:400px; border-radius: 19px;"><img src="imagens/oni2.png"style="width: 420px; height:420px; po " alt=""></div>
        </div>
        
        <div class="parte2_info5">
            <div class="perso1" style="background-color:transparent;width:400px; border-radius: 19px;"><img src="imagens/mino2.png"style="width: 420px; height:420px; po " alt=""></div>
            <div class="perso1" style="background-color: transparent;width:400px; border-radius: 19px;"><img src="imagens/medusa2.png"style="width: 420px; height:420px; po " alt=""></div>
            <div class="perso1" style="background-color: transparent;width:400px; border-radius: 19px;"><img src="imagens/lobihomi.png"style="width: 420px; height:420px; po " alt=""></div>
            <div class="perso1" style="background-color: transparent;width:400px; border-radius: 19px;"><img src="imagens/saci.png"style="width: 420px; height:420px; po " alt=""></div>
        </div>
         <img src="imagens/borda_vide1.png" style=" width: 100%; top: 155px; position: relative;"alt="">
     </div>
    </div>

     <div class="info6">
        
           <div style=" width: 100%; height: 900px;margin-top: -145px;" id="vedio">
              <video src="videos/video_folk.mp4" style="width: 100%;" autoplay muted loop></video>
          </div>
         <img src="imagens/borda_video2.png" style="width: 100%; margin-top: -1200px;"alt="">
     </div>

     <div class="info7" id="sobre_nois" style="height:1120px;">
        <img src="imagens/img_gradient1.png" style=" width: 100%;"alt="">
         <div class="texto_info7" style="width:14%;">
            <img src="imagens/nenan.png" alt="" class="rostos" style="border-radius: 150px; width: 100%; border: 3px solid white;">
            <img src="imagens/novais.png" alt="" class="rostos" style="border-radius: 140px; width: 100%; border: 3px solid white;">
            <img src="imagens/lena.png" alt="" class="rostos" style="border-radius: 300px; width: 100%; border: 3px solid white;">
        </div>
        <div class="texto1">
            <h1>Rennan Furtado</h1>
            <h3>DEV Front-end, Sound Designer</h3>
        </div>
        <div class="texto2">
            <h1>Gabriel Novais</h1>
            <h3>DEV Back-end, Analista de Marketing Digital</h3>
        </div>
        <div class="texto3">
            <h1>Helena Maia</h1>
            <h3>DEV, Grafic Artist, animadora</h3>
            </div>
         <div class="img_info7">
           
         </div>
         </div>
     </div>

     <div class="sobre_nos">
        
     </div>
     <div class="info8">
        <img src="imagens/img_gradient2.png" style="width: 100%;" alt="">
        <div class="img_rodape">
            <a href="download.html">
                <img src="imagens/logo.png" alt="" style="right:20px;">
            </a>
            <a href="http://www.etecanhanguera.com.br">
                <img src="imagens/logo_etec_barto.png" style="width: 180px;"alt=""><br><br><br>
            </a>
            <a href="https://www.youtube.com/@CanalGuttemberg">
                <img src="imagens/logo_gut.png" style="width: 150px;"alt="">
            </a>
        </div>
        <div class="lado_direito_rodape">
              <div class="parte1_info8">
             

                        <ul class="ul_r">
                            <li class="li"> <a class="s1" href="#folk_fighter"> FOLK FIGHTER</a> </li>
                            <li> <a class="s1" href="#personagem">PERSONAGEM</a> </li>
                            <li> <a class="s1" href="#vedio"> GAMEPLAY</a> </li>
                            <li> <a class="s1" href="#sobre_nois">SOBRE NÓS</a> </li>
                        </ul>
                  
                

              </div>
              <div class="parte2_info8">
                <BR><BR><BR></BR></BR></BR><br><br><br><br>
                <p style=" font-size: 1.2em;font-family: 'Russo One', sans-serif; color: #31170c; margin-left: 40px;">©2023</p>
                <br><br>
                <p  style=" font-size: 1.2em;font-family: 'Russo One', sans-serif; color: #31170c; margin-left: 40px;">TEAM</p>
                <br><br>
                <p  style=" font-size: 1.2em;font-family: 'Russo One', sans-serif; color: #31170c; margin-left: 40px;">ETEC BARTOLOMEU BUENO DA SILVA - ANHANGUERA</p>
                <br><br>
                <p  style=" font-size: 1.2em;font-family: 'Russo One', sans-serif;color:#31170c; margin-left: 40px;">GUTTEMBERG</p>
              </div>
              <div class="parte3_info8"></div>
        </div>
    </div>
<script>
  
</script>
</body>


</html>
