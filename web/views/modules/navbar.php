
<?php 

/*=============================================
  Categorias
=============================================*/

$url = "categories";
$method = "GET";
$fields = array();

$category = CurlController::request($url,$method,$fields);


if($category->status == 200){

    $category = $category->results[0];
  
}else{

    $category = null;
   
}





?>


<div class="container py-2 py-lg-4">

  <div class="row">
    
    <div class="col-12 col-lg-2 mt-1">
      
      <div class="d-flex justify-content-center">
        
        <a href="/" class="navbar-brand">
          <img src="views/assets/img/template/logotipo.png" class="brand-image img-fluid py-3 px-5 p-lg-0 pe-lg-3">
        </a>

      </div>


    </div>

    <div class="col-12 col-lg-7 col-xl-8 mt-1 px-3 px-lg-0">
      
      

      <div class="dropdown px-1 float-start templateColor">

        <a id="dropdownSubMenu1" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-uppercase">
          <span class="d-lg-block d-none ">Categoria<i class="ps-lg-2 fas fa-th-list"></i>
          </span>
          <span class="d-lg-none d-block"><i class="fas fa-th-list"></i></span>

        </a>

        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

          <!-- Level two dropdown-->
          <li class="dropdown-submenu dropdown-hover">

            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase">

              <i class="fas fa-tshirt pe-2 fa-xs"></i>  busos


            </a>

            <ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
              <li>
                <a tabindex="-1" href="modules/animes.php" class="dropdown-item">Animes</a>
              </li>
              <li>
                <a tabindex="-1" href="#" class="dropdown-item">Gamer</a>
              </li>
              <li>
                <a tabindex="-1" href="#" class="dropdown-item">Moteros</a>
              </li>
              
            </ul>

            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              <li>
                <a tabindex="-1" href="#" class="dropdown-item">Animes</a>
              </li>
              <li>
                <a tabindex="-1" href="#" class="dropdown-item">Gamer</a>
              </li>
              <li>
                <a tabindex="-1" href="#" class="dropdown-item">Moteros</a>
              </li>
               
            </ul>

          </li>

        </ul>
      </div>

      <form class="form-inline">
        <div class="input-group input-group w-100 me-0 me-lg-4">
          <input class="form-control rounded-0 p-3 pe-5" type="search" placeholder="Buscar..." style="height:40px">
          <div class="input-group-append px-2 templateColor">
            <button class="btn btn-navbar text-white" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

    </div>

    <div class="col-12 col-lg-3 col-xl-2 mt-1 px-3 px-lg-0">
      
      <div class="my-2 my-lg-0 d-flex justify-content-center">
        
        <a href="#">
          
          <button class="bt btn-default float-start rounded-0 border-0 py-2 px-3 templateColor">
            
            <i class="fa fa-shopping-cart"></i>

          </button>

        </a>

        <div class="small border float-start ps-2 pe-5 w-100">
          
          TU CESTA <span>0</span><br> USD $<span>0</span>

        </div>

      </div>

    </div>

  </div>

</div>

  <!-- /.navbar -->