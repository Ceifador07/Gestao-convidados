<div class="p-2">
    <h4>Adicionar Convidados</h4>
    <form action="" class="pt-4 addconvidados" enctype="multipart/form-data">
        <div class="row text-center px-2" id="message">

        </div>
        <div class="row">
            <div class="col-sm-6 mb-3 col-md-6">
                <label for="" class="form-label fw-bold">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome" id="" class="form-control">
                <code class="nomeValida"></code>
            </div>
            <div class="col-sm-6 mb-3 col-md-6 fw-bold ">
                <label for="" class="form-label">Apelido</label>
                <input type="text" name="apelido" id="apelido" placeholder="Digite o nome" id="" class="form-control">
                <code class="apelidoValida"></code>
            </div>
            <div class="col-sm-6 mb-3 col-md-6 fw-bold ">
                <label for="" class="form-label">Parentesco</label>
                <select name="Tipo" id="Tipo" class="form-control">
                    <option value="">Parentesco</option>
                    <?php foreach ($Parentescos as $Parentesco) : ?>
                        <option value="<?= $Parentesco->id ?>"><?= $Parentesco->Tipo ?></option>
                    <?php endforeach ?>
                </select>
                <code class="TipoValida"></code>
            </div>
            <!-- <div class="col-sm-6 mb-3 col-md-6 fw-bold ">
                    <label for="" class="form-label">Imagem</label>
                    <input type="file" name="imagem" id="imagem" placeholder="Foto do Perfil" id="" class="form-control">
                </div> -->
            <div class="col-sm-6 mb-3 col-md-6 fw-bold ">
                <label for="" class="form-label">Mesa</label>
                <select name="mesa" id="Mesa" class="form-control">
                    <option value="">Mesa</option>
                    <?php foreach ($mesas as $mesa) { ?>
                        <option value="<?= $mesa->id ?>"><?= $mesa->NomeMesa ?></option>
                    <?php } ?>
                </select>
                <code class="MesaValida"></code>
            </div>
            <div class="col-sm-6 col-md-6 fw-bold ">
                <input type="submit" value="Enviar" placeholder="Foto do Perfil" id="" class="btn btn-primary px-4 py-2">
            </div>
        </div>
    </form>
</div>