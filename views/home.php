<div style="
    width: 100%;
    height: 250px;
    background-image: url('assets/images/bannerteste.png');
    background-position: start;
    background-repeat: no-repeat;
    background-size: 150% 100%;
    background-color: red;
    ">
</div>

<div class="container">

    <div class="row">
        <div class="col-12 text-white">
            <div class="p-4 d-flex flex-column justify-content-center align-items-center">
                <h1 class="h5 text-uppercase">As melhores marcas</h1>
                <div class="marcas">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <a href="">
                                <img src="assets/images/centauro.png" alt="" srcset="" width="70px">
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="">
                                <img src="assets/images/sony.jpeg" alt="" srcset="" width="70px">
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="">
                                <img src="assets/images/philips.jpeg" alt="" srcset="" width="70px">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--row-->
    <?php for($count = 0; $count < 3; $count++){?>
    <div class="row">

        <div class="col-12 mx-4 text-white">
            <div class="">
                <h1 class="h6 text-uppercase font-weight-bold">
                <?php if($count == 0){?>
                    Novos Produtos
                <?php }else if($count == 1){?>
                    Produtos em destaque
                <?php }else if($count == 2){?>
                    Mais vendidos atuais
                <?php }?>
                </h1>
            </div>
        </div>

        
        <div class="carousel-container">
            <div class="carousel-inner">
                <div class="track">

                    <?php for($i = 0; $i < 9; $i++){?>
                        <div class="card row bg-light py-4 px-2 mx-2" style="width: 18rem; border-radius: .5rem;">
                                                     
                            <div class="col-6">           
                                <p class="" style="font-size:12px; letter-spacing: .1rem; font-weight: 500;">ATÉ</br><strong class="h5 font-weight-bold">40% OFF</strong><br/>EXCLUSIVAS</p>
                                <a href="#" class="">Confira</a>
                            </div><!--card-body-->


                             <!--100px180-->
                             <?php if($count == 0){?>
                                <img class="col-6" src="assets/images/melhores_marcas1.png" alt="Imagem de capa do card" width="128px">
                            <?php }else if($count == 1){?>
                                <img class="col-6" src="assets/images/card2.png" alt="Imagem de capa do card" width="128px">
                            <?php }else if($count == 2){?>
                                <img class="col-6" src="assets/images/card3.jpg" alt="Imagem de capa do card" width="128px">
                            <?php }?>



                        </div><!--card-->
                    <?php } ?>
        
                </div><!---track-->
            </div><!---carousel-inner-->

            <div class="nav">

                <button class="prev">
                    <i class="material-icons">
                        keyboard_arrow_left
                    </i><!--material-icons-->
                </button><!--prev-->

                <button class="next">
                    <i class="material-icons">
                        keyboard_arrow_right
                    </i><!--material-icons-->
                </button><!--next-->

            </div><!--nav-->

        </div><!--carousel-container-->
      
    </div><!--row-->

    <?php } ?>
    <div class="row m-4 p-4 text-white text-center d-flex justify-content-center align-items-center"    style="
            border-radius:.5rem; 
            background: rgb(2,0,36);
            background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(114,49,226,1) 35%, rgba(255,0,79,1) 100%);">
      
            <div class="col">
                <img class="" src="assets/images/tenis.png" alt="" width="120">
            </div>
            <div class="col">
                <p class="h5">Confira os presentes <br/>mais procurados</p>
            </div>
            <div class="col m-4">
                <img class="" src="assets/images/eletronico.png" alt="" width="200">
            </div>
            
            <div class="col">
                <p class="h5">Vai perder essa <br/>promoção</p>
            </div>
  
            <div class="col">
                <img src="assets/images/furadeira.png" alt="" width="120">
            </div>
           
   
    </div><!--row-->


    <div class="row p-4 text-white text-center ">
        <h2 class="h5 text-uppercase font-weight-bold">ASSINE A NOSSA NEWSLETTER</h2>
        <p>Receba as últimas atualizações sobre novos produtos e vendas futuras</p>

        <form class="w-100" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="email" class="form-control " id="exampleInputPassword1" placeholder="Insira o seu endereço de e-mail">
            </div>
            <button type="submit" class="btn btn-warning font-weight-bold w-75 ">Se Inscrever</button>
        </form>

        <p class="pt-4 w-100"> 
            <?php for($i = 0; $i < 1; $i++){?>
           <a href="" class="mx-2">
                <i class="fab fa-facebook-square text-white fa-2x"></i>
           </a>  

           <a href="" class="mx-2">
                <i class="fab fa-instagram-square text-white fa-2x"></i>
           </a>  

           <a href="" class="mx-2">
                <i class="fab fa-twitter-square text-white fa-2x"></i>
           </a>  

           <a href="" class="mx-2">
                <i class="fab fa-google-plus-square text-white fa-2x"></i>
           </a>  

           <a href="" class="mx-2">
                <i class="fab fa-whatsapp-square text-white fa-2x"></i>
           </a>  

           <?php }?>
        </p>
    </div>


</div><!--container-->


<div class="d-none"  style="background-color: #fff;">
    <p>
        curioso
        ansioso
        preguiçoso
        esforçado
        educado
    </p>
</div>








