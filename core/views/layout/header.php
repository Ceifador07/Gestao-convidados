<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/styles.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/all.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="body d-flex">
        <div class="conteiner">
            <div class="offcanvas offcanvas-start sindebar-var " data-bs-scroll="true" data-bs-backdrop="false"
                tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title  text-white" id="offcanvasScrollingLabel">MATSINHE</h5>
                    <!-- <a href="#" class=""><img src="public/images/1672901618319.png" alt="" class=""></a> -->
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <!-- body  -->
                    <nav class="navbar-dark">
                        <!-- <div class="text-uppercase px-3 fw-bold">Dashboard</div> -->
                        <ul class="navbar-nav">
                            <li>
                                <i class="fa-solid fa-home"></i><a href="?url=index" class="nav-link">Inicio</a>
                            </li>

                            <li class="nav-item  dropdown">
                                <a class="nav-link sindebar-link" href="#collapseExample" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExamples">
                                    <span><i class="fa-solid fa-users"></i>Convidados</span> <span class="right-icon"><i
                                            class="fa-solid fa-chevron-left "></i></span></a>
                            </li>

                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <ul class="navbar-nav">
                                        <li><i class="fa-solid fa-users"></i><a href="?url=convidados" class="nav-link">Gerir</a></li>
                                        <!-- <li><i class="fa-solid fa-add"></i><a href="?url=addConvidados" class="nav-link">Cadastrar</a> -->
                                        <li><i class="fa-solid fa-add"></i><a href="?url=Parentesco" class="nav-link">Parentesco</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <li class="nav-item  dropdown">
                                <a class="nav-link sindebar-link" href="#collapseExamples" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExamples">
                                    <span><i class="fa-solid fa-cake"></i>Bolos</span> <span class="right-icon"><i
                                            class="fa-solid fa-chevron-left "></i></span></a>
                            </li>
                            <div class="collapse " id="collapseExamples">
                                <div class="card card-body  ">
                                    <ul class="navbar-nav py-0">
                                        <li><i class="fa-solid fa-cake-candles"></i><a href="?url=Bolos"
                                                class="nav-link">Gerir</a></li>
                                        <!-- <li><i class="fa-solid fa-add"></i><a href="?url=addBolos" class="nav-link">Cadastrar</a> -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <li class="nav-item  dropdown">
                                <a class="nav-link sindebar-link" href="#tabela" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExamples">
                                    <span><i class="fa-solid fa-table"></i>Mesas</span> <span class="right-icon"><i
                                            class="fa-solid fa-chevron-left "></i></span></a>
                            </li>
                            <div class="collapse " id="tabela">
                                <div class="card card-body  ">
                                    <ul class="navbar-nav py-0">
                                        <li><i class="fa-solid fa-table"></i><a href="?url=Mesas"
                                                class="nav-link">Gerir</a></li>
                                        <!-- <li><i class="fa-solid fa-add"></i><a href="?url=addBolos" class="nav-link">Cadastrar</a>s</li> -->
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-2">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <button class="navbar-toggler mx-2" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"> <i
                            class="fa-solid   fa-navicon"></i></button>

                    <!-- <a class="navbar-brand me-auto fw-bold " style="color: #ffffff;;" href="#">SHL</a> -->

                    <button class="navbar-toggler dropdown-toggle" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <!-- <span class="navbar-toggler-icon"></span> -->
                        <i class="fa-solid fa-user-alt "></i>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end " id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn   dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user-alt "></i>
                                </button>
                                <ul class="dropdown-menu dropdown-color dropdown-menu-end ">
                                    <li class="d-flex"><a class="dropdown-item" href="#">Definicoes <i
                                                class="fa-solid fa-gear m-1"></i></a></a></li>
                                    <li class="d-flex"><a class="dropdown-item d-flex  " href="#">Sair <i
                                                class="fa-solid fa-arrow-right-from-bracket m-1"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
            <div class="container-fluid">