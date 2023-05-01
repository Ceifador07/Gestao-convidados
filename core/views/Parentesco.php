<div class="p-2 ">

    <div class="row d-flex justify-content-between">
        <div class="col-sm-6 col-md-8">
            <h4>Parentesco</h4>
        </div>
        <div class="col-sm-6 col-md-4 d-flex justify-content-end ">
            <button class="btn btn-primary m-auto" type="button" data-bs-toggle="modal" data-bs-target="#janelamodal"><i class="fa-solid fa-add m-1"></i>Tipo</button>
        </div>

    </div>
    <div class="row mt-3 bg-white mx-1 py-2">
        <div class="table-responsive">
            <table class="table table-hover bg-white table-striped" id="example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome Parentesco</th>
                        <th>Acao</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($Parentescos) > 0) {
                        foreach ($Parentescos as $parentesco) {  ?>
                            <tr>

                                <td><?= $parentesco->id ?></td>
                                <td><?= $parentesco->Tipo ?></td>
                                <td>
                                    <button class="btn"><i class="fa-solid fa-edit"></i></button>
                                    <button class="btn "><i class="fa-solid fa-trash "></i></button>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="3">Sem Dados</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--   Modal-->


<div class="modal fade" id="janelamodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Preencha o Formulario de Entradas</h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="modal-form" class="parentestco">
                <div class="modal-body">
                    <div id="resp"></div>
                    <div class="row p-2">
                        <label for="" class="form-label">Parentestco</label>
                        <input type="text" name="tipo" placeholder="Digite o Tipo de Parentesco" id="" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="agendar" value="Registar" class="btn btn-success">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>

                </div>
            </form>
        </div>
    </div>
</div>