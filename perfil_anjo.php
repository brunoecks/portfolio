
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Perfil do Anjo Eyhe">
        <meta name="author" content="Eyhe">
        <link rel="shortcut icon" href="favicon/pp_EYHE_favicon_180px.png" />

        <title>Eyhe →
            <?php echo $nome;?>
        </title>


        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Custom styles para o perfil do anjo: -->
        <link href="css/style_perfil_anjo.css" rel="stylesheet">
        <!--Font Awesome -->
        <script src="https://kit.fontawesome.com/f694cb0744.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/style_teste.css" />
        <style>
            .barra-agendamento-sucesso {
                width: 100%;
                height: auto;
                padding: 15px;
                color: #fff;
                border-radius: 5px;
                background-color: #8ec53d;
                display: none;
            }

            .barra-agendamento-problemas {
                width: 100%;
                height: auto;
                padding: 15px;
                color: #fff;
                border-radius: 5px;
                background-color: #ed323e;
                display: none;
            }
            /* Shared */

            .loginBtn {
                box-sizing: border-box;
                position: relative;
                /* width: 13em;  - apply for fixed size */
                margin: 0.2em;
                padding: 0 15px 0 46px;
                border: none;
                text-align: center;
                line-height: 34px;
                white-space: nowrap;
                border-radius: 0.2em;
                font-size: .7rem;
                font-weight: 700;
                color: #FFF;
                text-decoration: none !important;
            }

            .loginBtn:before {
                content: "";
                box-sizing: border-box;
                position: absolute;
                top: 0;
                left: 0;
                width: 34px;
                height: 100%;
            }

            .loginBtn:focus {
                outline: none;
            }

            .loginBtn:active {
                box-shadow: inset 0 0 0 32px rgba(0, 0, 0, 0.1);
            }
            /* Facebook */

            .loginBtn--facebook {
                background-color: #4C69BA;
                background-image: linear-gradient(#4C69BA, #3B55A0);
                /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
                text-shadow: 0 -1px 0 #354C8C;
            }

            .loginBtn--facebook:before {
                border-right: #364e92 1px solid;
                background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
            }

            .loginBtn--facebook:hover,
            .loginBtn--facebook:focus {
                background-color: #5B7BD5;
                background-image: linear-gradient(#5B7BD5, #4864B1);
            }
            /* Google */

            .loginBtn--google {
                /*font-family: "Roboto", Roboto, arial, sans-serif;*/
                background: #DD4B39;
            }

            .loginBtn--google:before {
                border-right: #BB3F30 1px solid;
                background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
            }

            .loginBtn--google:hover,
            .loginBtn--google:focus {
                background: #E74B37;
            }

            .capa {
                background: url('img/send_eyhe_fundo_colorido.png') !important;
                background-size: auto;
                background-repeat: no-repeat !important;
            }

            .profile-post-subtitle {
                font-size: 1.1rem;
            }

            .botao-acoes-agendar {
                background-color: #ffc107;
                color: #000;
                border: none;
            }

            .botao-acoes-agendar:hover {
                background-color: #e9af00;
                color: #000;
                border: none;
            }

            .botao-acoes-agendar:focus {
                background-color: #e9af00;
                color: #000;
                border: none;
            }

            .botao-acoes-conversar {
                background-color: #007bff;
                color: #fff!important;
                border: none;
            }

            .botao-acoes-conversar:hover {
                background-color: #1067c9;
                color: #fff!important;
                border: none;
            }

            button:focus {
                outline: 0 !important;
                border: none !important;
            }

            button:active {
                outline: 0 !important;
                border: none !important;
            }

            .btn-primary, .btn-warning{
                border-radius:30px !important;
            }
        </style>
    </head>

    <body>

        <?php include 'repeat/menu_dash_novo.php'; ?>


        <div class="container">

            <div class="row">
                <!--Resumo das informações do anjo-->
                <div class="col-sm-8 profile-main">
                    <div class="row capa justify-content-center" id="capa">
                        <div class="col-lg-6 col-md-8 profile-post justify-content-center">
                            <a class="btn btn-light btn-sm pt-1" href="ver_todos.php">Voltar</a>
                            <div class="w-100 justify-content-center profile-cover">
                                <img class="rounded mx-auto d-block profile-picture" style="width: 170px; height: 170px; border-radius: 50% !important;" src="painel/<?php echo $avatar_anjo; ?>" alt="">
                            </div>
                            <p class="text-center" style=" margin-top:-30px !important;"><i class="fas fa-user-alt" id="status_icon" style="color:#1EEE8E; font-size: 30px; text-align:center"></i></p>

                            <p class="text-center profile-post-meta mt-0" id="status_p">Esse anjo está <u><?php echo $online_t; ?></u></p>
                            <h2 id="nome-heroi" class="text-center profile-post-title"><b><?php echo $nome; ?></b></h2>

                            <!--Este parágrafo só é visível no mobile-->
                            <p class="text-center" id="biografia-mobile">
                                <?php echo $biografia; ?>
                            </p>
                            <p class="text-center mobile"><a onclick="Mostrar()" id="link-noticia">Mostrar biografia</a></p>

                        </div>
                        <div class="col-lg-6 col-md-8 profile-post justify-content-center padding-mobile">
                            <h3 class="profile-post-subtitle text-center" id="conversa_sobre">Este Anjo conversa sobre:</h3>
                            <h5 class="text-center mt-0"> <span class="badge badge-secondary"><?php echo $desafio1; ?></span><span class="badge badge-secondary"><?php echo $desafio2; ?></span><span class="badge badge-secondary"><?php if($desafio3 != '') echo $desafio3; ?></span></h5>
                            <img src="img/stars.png" alt="Média de avaliações do anjo" class="rounded mx-auto d-block" width="150" style="margin-bottom: -10px; padding-bottom: -5px;">
                            <p class="text-center profile-post-meta mt-0 mb-3">(
                                <?php echo $qtd_avaliacoes;?> avaliações)</p>

                            <a class="btn btn-block btn-primary mx-auto <?php echo $classe_trava_conversa; ?> botao-acoes-conversar">Conversar agora</a>
                            <a class="btn btn-block btn-warning mx-auto <?php echo $classe_trava_agendamento; ?> botao-acoes-agendar">Agendar conversa</a>
                            <center>
                                <p id="valor"> <b>R$14,90</b> / 40 minutos <br/> Os primeiros 10 minutos são <b>grátis</b></p>
                            </center>
                        </div>
                        <div id="barra" style="background-color: #268cff; width: 100%; padding: 7px; padding-left: 50px; color: #fff;">
                            <svg class="bi bi-heart-fill mx-2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>Esse Anjo já ajudou <b><?php echo $qtdgeral; ?></b> pessoas!
                        </div>
                    </div>

                    <!-- Fim do resumo das informações -->
                    <!--Biografia do anjo-->
                    <div class="text-justify profile-post" id="biografia-desk" style="padding: 10px; ">
                        <!--Este parágrafo só é visível no desktop-->
                        <h3 style="padding-top: 20px;">Minha <span style="color: #268cff">História </h3>
                    <p>" <?php echo $biografia; ?> "</p>
                </div>

                <!--video do anjo-->
                <div class="text-justify profile-post" id="video" style="padding: 10px; <?php if($video == '') echo 'display: none'; ?>" >
                    <!--Este parágrafo só é visível no desktop-->
                    <h3 class="mt-3 ml-2">Meu <span style="color: #268cff">Vídeo </h3>
                      <?php
                        $video = explode('=', $video);
                        $video = $video[1];
                      ?>
                      <iframe width="100%" height="415" src="https://www.youtube.com/embed/<?php echo $video;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <br/><br/>
                </div>
                <!-- Fim da biografia do anjo -->

                <!-- /.profile-post -->
                <div class="profile-post profile-ava justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-12 justify-content-center">
                            <h3 class="text-center profile-post-title mb-2" style="color:#fff">Algumas avaliações que recebi</h3>
                            <br/>
                        </div>

                        <?php
                          $qtd = 0;
                          $consulta = $conexao->query("SELECT comentario FROM `avaliacoes_new` WHERE (idanjo = $id) AND (comentario != '') order by id desc");
                          while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            $qtd++;


                        ?>
                          <div class="col-lg-4 col-md-10 mx-1 mb-2 ava">
                              <img src="img/stars.png" alt="Média de avaliações do anjo" class="rounded mx-auto d-block" width="150">
                              <p class="text-center align-middle "><?php echo $linha['comentario']; ?></p>
                          </div>

                        <?php }

                          if($qtd == 0){
                            echo "<center><p style='color: #fff;'>Esse anjo ainda não possui nenhuma avaliação :(</p></center>";
                          }


                        ?>


                    </div>


                </div>

                <nav class="profile-post justify-content-center mt-4 ">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10 justify-content-center">
                            <a class="btn btn-block btn-primary mx-auto <?php echo $classe_trava_conversa; ?> botao-acoes-conversar" >Conversar agora</a>
                        </div>
                        <div class="col-lg-6 col-md-10 justify-content-center">
                          <a class="btn btn-block btn-warning mx-auto <?php echo $classe_trava_agendamento; ?> botao-acoes-agendar">Agendar conversa</a>
                        </div>
                        <br/>
                        <center>
                          <p><b>R$14,90 / 40 minutos</b><br/>
                          Os primeiros 10 minutos são <b>grátis</b></p>
                        </center>
                    </div>


                </nav>

            </div>
            <!-- /.profile-main -->
            <!--Seção Lateral-->
            <div class="col-sm-4  profile-sidebar">
                <div class="sidebar-module sidebar-module-inset mb-5">
                    <h4 class="text-center profile-post-subtitle mb-3">Livros recomendados por mim</h4>
                    <div class="row justify-contnt-center">
                        <div class="col-4">
                            <a href="#" target="_blank">
                                <img src="img/livro1.png" class="rounded mx-auto d-block" alt="" width="100">
                            </a>
                        </div>

                        <div class="col-4">
                            <a href="#" target="_blank"><img src="img/livro2.png" class="rounded mx-auto d-block" alt="" width="100"></a>
                        </div>
                        <div class="col-4">
                            <a href="#" target="_blank"><img src="img/livro3.png" class="rounded mx-auto d-block" alt="" width="100"></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-module">
                    <br/>
                    <h4 class="text-center profile-post-subtitle mb-1">Conteúdos recomendados</h4>
                    <p class="text-center profile-post-meta mt-0"> Conteúdos que me inspriam :)</p>
                    <div class="row justify-content-center">

                        <?php
                            include ('painel/engine/conecta.php');
                            $consulta = $conexao->query("SELECT * FROM blog WHERE rascunho = 'nao' ORDER BY rand() LIMIT 4 ");
                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

                        ?>


                        <div class="col-6">
                            <a href="blog_i.php?r=<?php echo $linha['url'];?>&q=<?php echo $linha['id'];?>" target="_blank">
                              <img src="painel/painel/<?php echo $linha['imagem_destaque']; ?>" alt="" class="rounded mx-auto d-block" alt="" width="150">
                              <p><?php echo $linha['titulo']; ?></p>
                            </a>
                        </div>

                      <?php } ?>


                    </div>
                </div>
                <div class="sidebar-module">

                    <br/>

                    <h4 class="text-center profile-post-subtitle mb-1">Coisas que gosto de fazer</h4>

                    <p class="text-center profile-post-meta mt-0"> Hobbies, hábitos e jeitos</p>

                    <div class="row justify-content-center">


                        <div class="col-3 justify-content-center"><img src="img/hobbies1.png" alt="" class="rounded mx-auto d-block" width="60">
                            <p class="profile-post-meta text-center mt-0">Yoga</p>
                        </div>
                        <div class="col-3 justify-content-center"><img src="img/hobbies2.png" alt="" class="rounded mx-auto d-block" width="60">
                            <p class="profile-post-meta text-center mt-0">Cozinhar</p>
                        </div>
                        <div class="col-3 justify-content-center"><img src="img/hobbies3.png" alt="" class="rounded mx-auto d-block" width="60">
                            <p class="profile-post-meta text-center mt-0">Ciclismo</p>
                        </div>
                    </div>

                </div>



            </div>
            <!-- Fim da Seção Lateral -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <footer class="profile-footer">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
            <a href="#"><b>Voltar ao Topo</b></a>
            </div>
            <div class=" col-md-12 mb-3">
            <a onclick="window.history.back();"><b>Procurar outro Anjo</b></a>
            </div>
            <p class="text-center">&copy;Eyhe 2020</p>
        </div>


    </footer>

    <!-- MODAL DE AGUARDE -->
    <div id="buscando-anjo" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <center>
              <p style="font-size: 24px;"><b>Foi uma ótima escolha! </b></p>
              <p>Seu Anjo será chamado agora mesmo, aguarde um pouquinho :) </p>
              <img src="img/loading.gif"  width="80px;" />
            </center>

        </div>
    </div>

    <!--Modal Identifique-se-->
      <div id="modal-identify" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large" style="border-top: 5px solid #2f90ff">

            <button class="uk-modal-close-default" type="button" uk-close style="color:#2f90ff"></button>

            <p class="uk-text-lead uk-text-center uk-margin-medium-bottom">Para completar essa ação você precisa de uma <b>Conta Eyhe</b> :)</p>
            <div>
              <button href="#modal-cadastro" uk-toggle class="uk-button uk-button-default uk-width-1-1" style="background: #2f90ff; color:#fff; font-weight:700; border-radius:3px">
                Criar Conta Eyhe
              </button>
              <br/><br/>
              <button  href="#modal-login" uk-toggle class="uk-button uk-button-default uk-width-1-1  uk-margin-small-bottom" style="background: #fff; color:#2f90ff; font-weight:700;border-radius:3px; border: 1px solid #2f90ff">
                Já tenho uma conta
              </button>
            </div>
        </div>
    </div>
    <!--Fim do Modal Identifique-se-->

    <!--Modal de login-->
    <div id="modal-login" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large" style="border-top: 5px solid #2f90ff">
        <button class="uk-modal-close-default" type="button" uk-close style="color:#2f90ff"></button>
              <form id="form-login-eyhe" action="" method="post">
                  <center><img src="https://www.eyhe.com.br/img/logotipo_azul.png" /></center><br/>
                  <input type="email" name="email" class="uk-input uk-margin-small-bottom" placeholder="Email">
                  <input type="password" name="senha" class="uk-input uk-margin-small-bottom" placeholder="Senha">
                  <button type="submit" class="uk-button uk-button-default uk-width-1-1" style="background: #2f90ff; color:#fff; font-weight:700; border-radius:3px">Entrar</button>
              </form>
              <br/>
              <center>Esqueceu a senha? <a href="/recuperar-senha" target="_blank"> Recupere aqui! </a></center>

              <hr/>
              <center> Criou sua conta usando Facebook ou Google ? <br/><br/> </center>
              <a href="<?php echo $url_login_facebook;?>"
                class="uk-button uk-width-1-1 uk-margin-auto loginBtn loginBtn--facebook">
                Entrar com Facebook
              </a>

              <a
                href="<?php echo $url_login_google;?>" class="uk-button uk-width-1-1 uk-margin-auto loginBtn loginBtn--google">
                Entrar com Google
              </a>

    </div>
    </div>
    <!--Fim do Modal de login-->

    <!--Modal de Cadastro-->
      <div id="modal-cadastro" class="uk-flex-top" uk-modal>

        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large uk-center"  style="border-top: 5px solid #2f90ff">
              <form id="cadastro" action="" method="post">

                <a href="<?php echo $url_pedido_facebook;?>"
                  class="uk-button uk-width-1-1 uk-margin-auto loginBtn loginBtn--facebook">
                  Cadastrar com Facebook
                </a>

                <a
                  href="<?php echo $url_pedido_google;?>" class="uk-button uk-width-1-1 uk-margin-auto loginBtn loginBtn--google">
                  Cadastrar com Google
                </a>

                <p class= "uk-text-center">Ou se preferir</p>

                    <div class="uk-margin">
                        <input class="uk-input" type="text" name="nome_completo" required placeholder="Nome Completo">
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" type="email" name="email" required placeholder="Email">
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" type="password" required placeholder="Senha">
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" type="tel" name="telefone"  placeholder="Celular (opcional)">
                    </div>



                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-checkbox" type="checkbox" required>  Sou maior de 18 anos e concordo com os termos de Política de Privacidade e Política de maioridade do Eyhe</label>

                    </div>
                    <br/>


          <button class="uk-modal-close-default" type="button" uk-close style="color:#2f90ff"></button>
          <button class="uk-button uk-button-default uk-width-1-1" style="background: #2f90ff; color:#fff; font-weight:700; border-radius:3px">Finalizar</button>
        </form>
        </div>
      </div>
    <!--Fim do Modal de Cadastro-->


    <!-- Modal Agendamento -->
   <div class="modal fade" id="modal-agendamento" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="border-top: 5px solid #ffc107; border-bottom: none !important;">
               <div class="modal-header">

                   <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="color: 5px solid #ffc107">
           <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body" style="border-top: none;">
                        <h4 class="text-center" id="TituloModalCentralizado" style="font-weight: 800;">Agende seu atendimento com
                            <?php echo $nome; ?>
                        </h4>

                        <form id="solicitar-agendamento" method="post" action="">
                            <input type="hidden" name="idheroi" value="<?php echo $_SESSION['id']; ?>" />
                            <input type="hidden" name="idanjo" value="<?php echo $id;?>" />
                            <div class="form-group">
                                <label>Selecione a data</label>
                                <input type="date" name="data" max="3000-12-31" min="1000-01-01" class="form-control" value='<?php echo date(' Y-m-d ', strtotime('+1 days ')); ?>'required>
                            </div>
                            <div class="form-group">
                                <label>Selecione a hora</label>
                                <input type="time" name="hora" max="23:59" min="00:00" class="form-control" value="19:00" required>
                            </div>
                            <div class="form-group">
                                <label>Confirme seu celular</label>
                                <input type="phone" name="celular" class="form-control" required>
                            </div>

                            <div class="barra-agendamento-sucesso">
                                Agendamento feito com sucesso! Fique atendo ao seu Whatsapp, a Equipe Eyhe entrará em contato com você.
                            </div>

                            <div class="barra-agendamento-problemas">
                                Houve problemas em seu agendamento. Por gentileza, tente novamente.
                            </div>

                    </div>
                    <div class="modal-footer" style="border-top:none">
                        <center>
                            <button type="submit" class="btn btn-primary botao-acoes-agendar">Agendar atendimento</button>
                        </center>
                    </div>
                    </form>

                </div>
            </div>
        </div>


        <!-- modal concluindo cadastro -->
        <div id="concluindo-cadastro" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                <center>
                    <p style="font-size: 24px;"><b>Aguarde...</b></p>
                    <p>Estamos criando seu perfil como Herói Eyhe. Parabéns pela iniciativa de conversar sobre sua dor. </p>
                    <img src="../img/loading.gif" width="80px;" />
                </center>

            </div>
        </div>


        <!-- modal bem vindo -->
        <div id="bem-vindo" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large" style="border-top: 5px solid #2f90ff">
                <button class="uk-modal-close-default" type="button" uk-close style="color:#2f90ff"></button>
                <center>
                    <img src="https://www.eyhe.com.br/img/logotipo_azul.png" /><br/>
                    <img src="https://www.eyhe.com.br/img/anjos_Desktop-m.png" />
                    <br/>
                    <h3>Bem-Vindo ao Eyhe :) </h3>
                    <p><b>Clique novamente em CONVERSAR ou em AGENDAR </b></p>
                </center>
            </div>
        </div>
        <!--Fim do Modal de bem vindo-->

        <!--Modal anjo indisponivel-->
        <div id="modal-anjo-indisponivel" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-padding-large" style="border-top: 5px solid #2f90ff">

                <button class="uk-modal-close-default" type="button" uk-close style="color:#2f90ff"></button>

                <p class="uk-text-lead uk-text-center uk-margin-medium-bottom" style="margin-bottom: 20px !important; font-size: 22px;">Seu Anjo está <span style="color: red"><b>indisponível</b></span> no momento. Porém, você pode ser atendido agora mesmo pelo nosso <span style="color: blue"><b>Anjo 24 hrs</b></span></p>
                <center>
                    <img src="https://eyhe.com.br/painel/avatar-anjos/marina_master.jpeg" width="100" height="100" style="border-radius: 50%;-webkit-box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.30);
-moz-box-shadow:    7px 7px 5px 0px rgba(50, 50, 50, 0.30);
box-shadow:         7px 7px 5px 0px rgba(50, 50, 50, 0.30);" />
                </center>
                <br/>
                <div>
                  <?php
                    if($_SESSION['id'] == ''){
                      echo"<button href='#' class='uk-button uk-button-default uk-width-1-1 precisa-logar' style='background: #2f90ff; color:#fff; font-weight:700; border-radius:3px'>
                          Conversar com Marina
                        </button>";
                    }else{
                      echo"<button href='#' class='uk-button uk-button-default uk-width-1-1 iniciar-atendimento-24hrs' style='background: #2f90ff; color:#fff; font-weight:700; border-radius:3px'>
                          Conversar com Marina
                        </button>";
                    }
                  ?>
                  <br/><br/>

                  Você também pode <b>AGENDAR</b> com esse Anjo utilizando o botão de agendamento na página do <b><?php echo $nome; ?></b>
                </div>
            </div>
        </div>
        <!--Fim do Modal Identifique-se-->

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            let status = <?php echo $online; ?>;

            if (!status) {
                document.getElementById("status_icon").style.color = "#f83102";
                document.getElementById("status_p").innerHTML = "Esse anjo está <u>Offline</u>";
            }
        </script>


        <script>
            //gerencia agendamento
            jQuery(document).ready(function() {
                jQuery('#solicitar-agendamento').submit(function() {
                    $('.barra-agendamento-sucesso').hide();
                    $('.barra-agendamento-problemas').hide();
                    var dados = $('#solicitar-agendamento').serialize();
                    jQuery.ajax({
                        type: "POST",
                        url: "painel/engine/recebe_agendamento.php",
                        data: dados,
                        beforeSend: function() {},
                        success: function(data) {
                            if (data == 'sucesso') {
                                $('.barra-agendamento-sucesso').show();
                                jQuery('#solicitar-agendamento').reset();
                            } else {
                                $('.barra-agendamento-problemas').show();
                            }
                        }
                    });
                    return false;
                });
            });

            //gerencia login
            jQuery('#form-login-eyhe').submit(function() {
                var dados = $('#form-login-eyhe').serialize();
                //alert(dados);
                jQuery.ajax({
                    type: "POST",
                    cache: false,
                    url: "scripts_g/PHP/login.php",
                    data: dados,
                    beforeSend: function() {},
                    success: function(data) {
                        if (data == 'LOGADO') {
                            UIkit.modal("#bem-vindo").show();
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        } else {
                            alert("Login e/ou senha incorretos. Tente novamente");
                            //alert(data);
                        }

                    }
                });
                return false;
            });

            //gerencia cadastro
            jQuery(document).ready(function() {
                jQuery('#cadastro').submit(function() {
                    var dados = jQuery(this).serialize();
                    jQuery.ajax({
                        type: "POST",
                        url: "painel/engine/cadastro_social.php",
                        data: dados,
                        beforeSend: function() {
                            UIkit.modal("#concluindo-cadastro").show();
                        },
                        success: function(data) {
                            if (data == 'Cadastro realizado com sucesso!') {
                                UIkit.modal("#concluindo-cadastro").hide();
                                setTimeout(function() {
                                    jQuery.ajax({
                                        type: "POST",
                                        url: "scripts_g/PHP/login.php",
                                        data: dados,
                                        beforeSend: function() {

                                        },
                                        success: function(data) {
                                            if (data == 'LOGADO') {
                                                UIkit.modal("#bem-vindo").show();
                                                setTimeout(function() {
                                                    location.reload();
                                                }, 2000);
                                            } else {
                                                alert(data);
                                            }
                                        },

                                    });
                                }, 1500);
                            } else {
                                UIkit.modal("#concluindo-cadastro").hide();
                                alert("Houve um problema: " + data);
                            }
                            //alert(data);
                        },

                    });
                    $("#cadastro").trigger("reset");
                    return false;
                });
            });

            //se eu clicar em alguma ação (conversar e/ou agendar, sem estar logado..)
            $(".precisa-login").click(function() {
                UIkit.modal("#modal-identify").show();
            });

            $(".agendar-atendimento").click(function() {
                $('#modal-agendamento').modal('show');
            });
            $(".iniciar-atendimento-24hrs").click(function() {
                var idheroi = <?php echo $id_heroi ?>;
                var idanjo = 122;
                var ids = idheroi + "-" + idanjo;

                jQuery.ajax({
                    type: "POST",
                    url: "painel/engine/cria_conversa_paga.php",
                    data: {
                        identificador: ids
                    },
                    beforeSend: function() {
                        UIkit.modal("#buscando-anjo").show();
                    },
                    success: function(data) {
                        //alert(data);
                        data = JSON.parse(data);
                        //alert(data[0].idanjo);
                        if (data[0].idanjo != '') {
                            window.location.href = 'sala_de_espera.php?idheroi=' + data[0].idheroi + '&idanjo=' + data[0].idanjo + '&tabela=' + data[0].tabela + '&sessao=' + data[0].sessao + '&idconversa=' + data[0].idconversa;
                        }
                    }
                });

            });
            $(".iniciar-atendimento").click(function() {
                var idheroi = <?php echo $id_heroi ?>;
                var idanjo = <?php echo $_GET['q']; ?>;
                var ids = idheroi + "-" + idanjo;

                jQuery.ajax({
                    type: "POST",
                    url: "painel/engine/cria_conversa_paga.php",
                    data: {
                        identificador: ids
                    },
                    beforeSend: function() {
                        UIkit.modal("#buscando-anjo").show();
                    },
                    success: function(data) {
                        //alert(data);
                        data = JSON.parse(data);
                        //alert(data[0].idanjo);
                        if (data[0].idanjo != '') {
                            window.location.href = 'sala_de_espera.php?idheroi=' + data[0].idheroi + '&idanjo=' + data[0].idanjo + '&tabela=' + data[0].tabela + '&sessao=' + data[0].sessao + '&idconversa=' + data[0].idconversa;
                        }
                    }
                });

            });

            $(".anjo-indisponivel").click(function() {
                UIkit.modal("#modal-anjo-indisponivel").show();
            });

            $(".precisa-logar").click(function() {
                UIkit.modal("#modal-identify").show();
            });




            //Mostrar mais...Mostrar menos na biogrtafia do anjo
            $(document).ready(function() {
                txt = document.getElementById('biografia-mobile').innerHTML;
                txt2 = txt.substr(0, 170) + '...';
                document.getElementById('biografia-mobile').innerHTML = txt2;

                if (txt > txt2) {
                    document.getElementById('biografia-mobile').innerHTML = txt2;
                    document.getElementById('link-noticia').innerHTML = "Ler toda a biografia";
                } else {
                    document.getElementById('biografia-mobile').innerHTML = txt;
                    document.getElementById('link-noticia').innerHTML = "Ocultar Biografia";
                }
            });

            function Mostrar() {

                if (document.getElementById('link-noticia').innerHTML == "Ler toda a biografia") {
                    document.getElementById('biografia-mobile').innerHTML = txt;
                    document.getElementById('link-noticia').innerHTML = "Ocultar Biografia";
                } else {
                    document.getElementById('biografia-mobile').innerHTML = txt2;
                    document.getElementById('link-noticia').innerHTML = "Ler toda a biografia";
                }

            }
            function carregar() {

                var data = new Date();
                var hora = data.getHours();



                if (hora >= 0 && hora < 12) {
                    // DIA

                    document.getElementById('capa').style.backgroundImage = "url('img/manha.jpg')";
                } else if (hora >= 12 && hora < 18) {
                    //TARDE

                    document.getElementById('capa').style.backgroundImage = "url('img/tarde.jpg')";

                } else {
                    // NOITE

                    document.getElementById('capa').style.backgroundImage = "url('img/noite.jpg')";
                    document.getElementById('nome-heroi').style.color = '#ffffff';
                    document.getElementById('conversa_sobre').style.color = '#ffffff';
                    document.getElementById('valor').style.color = '#ffffff';
                }
            }

        </script>
    </body>

    </html>
