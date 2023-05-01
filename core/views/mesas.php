<div class="p-2 ">
    <div class="row d-flex justify-content-between">
        <div class="col-sm-3">
            <h4>Parentesco</h4>
        </div>
        <div class="col-sm-3  text-end">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#janelamodal"><i class="fa-solid fa-add"></i>Mesa</button>
        </div>

    </div>
    <div class="row mt-3 bg-white mx-1 py-2">
        <div class="table-responsive">
            <table class="table table-hover bg-white  " id="example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome da Mesa</th>
                        <th>Acao</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mesas as $mesa) { ?>
                        <tr>
                            <td><?= $mesa->id ?></td>
                            <td><?= $mesa->NomeMesa ?></td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-edit"></i></button>
                                <button class="btn "><i class="fa-solid fa-trash "></i></button>
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


<div class="modal fade" id="janelamodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registar Mesa</h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="modal-form" class="mesas" >
                <div class="modal-body">
                    <div id="resp"></div>
                    <div class="row p-2">
                        <label for="" class="form-label">Nome da Mesa</label>
                        <input type="text" name="nome" placeholder="Digite o nome da Mesa" id="" class="form-control">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="submit" id="agendar" value="Registar" class="btn btn-success px-4">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>

                </div>
            </form>
        </div>
    </div>
</div>