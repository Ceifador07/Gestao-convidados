<div class="p-2">
    <div class="row d-flex justify-content-between mx-2">
        <div class="col-sm-6 col-md-8">
            <h4>Gerir convidados</h4>
        </div>
        <div class="col-sm-6  col-md-4 d-flex justify-content-end">
            <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#janelamodal"><i class="fa-solid fa-add "></i>Convidados</button>
            <a href="?url=busca" class="btn btn-primary mx-2"><i class="fa-solid fa-search "></i>Filtrada</a>
        </div>
    </div>
    <div class="row bg-white py-2 mx-1 mt-3 shadow-sm   ">
        <div id="resp"></div>
        <div class="table-responsive">
            <table class="table table-hover" id="example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Apelido</th>
                        <th>Parentesco</th>
                        <th>Mesa</th>
                        <th>Acao</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $status = '';
                    foreach ($Convidados as $Convidado) {
                        if ($Convidado->status > 0) {
                            $status = '';
                            $disable = '';
                        } else {
                            $status = 'bg-success';
                            $disable = 'disabled';
                        }


                    ?>
                        <tr class="<?= $status ?>">
                            <td><?= $Convidado->id ?></td>
                            <td><?= $Convidado->nome ?></td>
                            <td><?= $Convidado->apelido ?></td>
                            <td><?= $Convidado->Tipo ?></td>
                            <td><?= $Convidado->NomeMesa ?></td>
                            <td>
                                <button class="btn edit" id="<?= $Convidado->id ?>" data-bs-toggle="modal" data-bs-target="#editar"><i class="fa-solid fa-edit"></i></button>
                                <button class="btn delet" id="<?= $Convidado->id ?>"><i class="fa-solid fa-trash"></i></button>
                                <button class="btn check" id="<?= $Convidado->id ?>" <?=$disable?>><i class="fa-solid fa-check"></i></button>
                            </td>
                        </tr>
                    <?php }
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
                <h5 class="modal-title" id="exampleModalLabel">Registar Convidado</h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="modal-form" class="addconvidados">
                <div class="modal-body">
                    <div id="message"></div>
                    <div class="row p-2">
                        <label for="" class="form-label fw-bold">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite o nome" id="" class="form-control">
                        <code class="nomeValida"></code>
                    </div>
                    <div class="row p-2">
                        <label for="" class="form-label">Apelido</label>
                        <input type="text" name="apelido" id="apelido" placeholder="Digite o nome" id="" class="form-control">
                        <code class="apelidoValida"></code>
                    </div>
                    <div class="row p-2">
                        <label for="" class="form-label">Parentesco</label>
                        <select name="Tipo" id="Tipo" class="form-control">
                            <option value="">Parentesco</option>
                            <?php foreach ($Parentescos as $Parentesco) : ?>
                                <option value="<?= $Parentesco->id ?>"><?= $Parentesco->Tipo ?></option>
                            <?php endforeach ?>
                        </select>
                        <code class="TipoValida"></code>
                    </div>
                    <div class="row pt-2 px-2">
                        <label for="" class="form-label">Mesa</label>
                        <select name="mesa" id="Mesa" class="form-control">
                            <option value="">Mesa</option>
                            <?php foreach ($mesas as $mesa) { ?>
                                <option value="<?= $mesa->id ?>"><?= $mesa->NomeMesa ?></option>
                            <?php } ?>
                        </select>
                        <code class="MesaValida"></code>
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



<!--   Modal-->


<div class="modal fade" id="editar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Convidado</h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="modal-form" class="Editarr">
                <div class="modal-body">
                    <div id="message"></div>
                    <div class="row p-2">
                        <label for="" class="form-label fw-bold">Nome</label>
                        <input type="text" name="nome" id="Editnome" placeholder="Digite o nome" id="" class="form-control">
                        <code class="nomeValida"></code>
                    </div>
                    <div class="row p-2">
                        <label for="" class="form-label">Apelido</label>
                        <input type="text" name="apelido" id="Editapelido" placeholder="Digite o nome" id="" class="form-control">
                        <code class="apelidoValida"></code>
                    </div>
                    <div class="row p-2">
                        <label for="" class="form-label">Parentesco</label>
                        <select name="Tipo" id="EditTipo" class="form-control">
                            <option value="">Parentesco</option>
                            <?php foreach ($Parentescos as $Parentesco) : ?>
                                <option value="<?= $Parentesco->id ?>"><?= $Parentesco->Tipo ?></option>
                            <?php endforeach ?>
                        </select>
                        <code class="TipoValida"></code>
                    </div>
                    <div class="row pt-2 px-2">
                        <label for="" class="form-label">Mesa</label>
                        <select name="mesa" id="EditMesa" class="form-control">
                            <option value="">Mesa</option>
                            <?php foreach ($mesas as $mesa) { ?>
                                <option value="<?= $mesa->id ?>"><?= $mesa->NomeMesa ?></option>
                            <?php } ?>
                        </select>
                        <code class="MesaValida"></code>
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