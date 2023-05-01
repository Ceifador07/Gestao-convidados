<div class="p-2">
    <div class="row d-flex justify-content-between mx-2">
        <div class="col-sm-6 col-md-8">
            <h4>Bolos</h4>
        </div>
        <div class="col-sm-6 col-md-4 d-flex justify-content-end">
            <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#bolos"><i class="fa-solid fa-add "></i>Bolos</button>
            <!-- <a href="?url=busca" class="btn btn-primary mx-2"><i class="fa-solid fa-search "></i>Filtrada</a> -->
        </div>
    </div>
    <div class="row p-2 mt-4">
        <div class="table-responsive table-md-responsive bg-white p-2">
            <table class="table table-triped table-hover" id="example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome do Bolo</th>
                        <th>Acao</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($bolos as $bolo) {
                    ?>
                        <tr>
                            <td><?= $bolo->id ?></td>
                            <td><?= $bolo->nome ?></td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-edit"></i></button>
                                <button class="btn ver" data-bs-toggle="modal" data-bs-target="#ver" id="<?= $bolo->id ?>"><i class="fa-solid fa-info"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<!--   Modal-->


<div class="modal  fade " id="ver">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel "></h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="message"></div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="" id="imagems" alt="" class="img-responsive w-75 h-75  rounded-circle">
                    </div>
                    <div class="col-md-6">

                        <table class="table table-bordered">

                            <tr>
                                <th>#</th>
                                <td id="idBolo"></td>
                            </tr>
                            <tr>
                                <th>Nome do Bolo</th>
                                <td id="NameBolo"></td>
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>




<!--   Modal-->


<div class="modal fade" id="bolos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Convidado</h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="modal-form" class="bolos" enctype="multipart/form-data">
                <div class="modal-body">
                    <div id="message"></div>
                    <div class="row p-2">
                        <label for="" class="form-label fw-bold">Nome do Bolo</label>
                        <input type="text" name="nome" id="Editnome" placeholder="Digite o nome" id="" class="form-control">
                        <code class="nomeValida"></code>
                    </div>
                    <div class="row p-2">
                        <label for="" class="form-label">imagem</label>
                        <input type="file" name="imagem" id="Editapelido" placeholder="Digite o nome" id="" class="form-control">
                        <code class="apelidoValida"></code>
                    </div>
                </div>
                <div class="col px-2 py-2 mb-3">
                    <input type="submit" id="agendar" value="Registar" class="btn btn-success">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>