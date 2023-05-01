$(document).ready(function () {
    $('#example').DataTable();

    $(document).on("submit", ".parentestco", function (e) {
        e.preventDefault();
        $.ajax({
            url: '?url=AddParentesco',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json"
        }).done(function (data) {
            if (data === 'REGISTADO COM SUCESSO') {
                $("#resp").html('<p class="alert alert-success text-center">Convidado Registado com Sucesso</p>')
                setTimeout(function () { location.reload() }, 2000)
            } else {
                alert(data)
            }
        })
    })


    // =====================================================================================================
    $(document).on("submit", ".bolos", function (e) {
        e.preventDefault();
        $.ajax({
            url: '?url=AddBolos',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json"
        }).done(function (data) {
            if (data === 'REGISTADO COM SUCESSO') {
                $("#message").html('<p class="alert alert-success text-center">Convidado Registado com Sucesso</p>')
                setTimeout(function () { location.reload() }, 2000)
            } else {
                alert(data)
            }
        })
    })






    // ================== Deletar o convidado clicado =======================================================================================
    $(document).on("click", ".delet", function (e) {
        e.preventDefault()
        const id = $(this).attr("id");
        $.ajax({
            url: '?url=RemoverUsuario',
            method: 'POST',
            data: {
                id: id
            },
            dataType: "json"
        }).done(function (data) {
            if (data === 'REGISTADO COM SUCESSO') {
                $("#resp").html('<p class="alert alert-success text-center">Convidado Registado com Sucesso</p>')
                setTimeout(function () { location.reload() }, 2000)
            } else {
                alert(data)
            }
            // alert(data)
        })
    })
    // ==================================================================================
    









    // ================== Pegar dos dados do Bolo selecionado =======================================================================================
    $(document).on("click", ".ver", function (e) {
        e.preventDefault()
        const id = $(this).attr("id");
        $.ajax({
            url: '?url=BuscarDadoBolo',
            method: 'POST',
            data: {
                id: id
            },
            dataType: "json"
        }).done(function (data) {
            $.each(data, function (key, value) {
                // alert(data[key].imagem)
                $("#idBolo").html(data[key].id);
                $("#NameBolo").html( data[key].nome);
                $(".modal-title").html( data[key].nome);
                $("#imagems").attr("src", "public/assets/images/"+data[key].imagem);
                $(".resposta").html("");
            });
        })
    })


    // ================== Pegar dos dados do usuario selecionado =======================================================================================
    $(document).on("click", ".edit", function (e) {
        e.preventDefault()
        // alert()
        const id = $(this).attr("id");
        $.ajax({
            url: '?url=BuscarDados',
            method: 'POST',
            data: {
                id: id
            },
            dataType: "json"
        }).done(function (data) {
            $.each(data, function (key, value) {
                $("#Editnome").attr("value", data[key].nome);
                $("#Editapelido").attr("value", data[key].apelido);
                $("#EditMesa").html("<option value=''>"+data[key].NomeMesa+"</option>");
                $(".resposta").html("");
            });
        })
    })
    // =======================================================Editar Usuario=======================================


    $(document).on("submit", ".Editarr", function (e) {
        e.preventDefault();

        function validate() {
            const nome = $("#nome").val();
            const apelido = $("#apelido").val();
            const tipo = $("#Tipo").val();
            const imagem = $("#imagem").val();
            if (nome == '') {
                $(".nomeValida").html("preencha o campo")
                $("#nome").css({ border: '1px solid red' })
                return true;
            }
            if (apelido == '') {
                $(".apelidoValida").html("preencha o campo")
                $("#apelido").css({ border: '1px solid red' })
                return true;
            }

        }
        if (validate()) {
            return false;
        } else {
            $.ajax({
                url: '?url=editarConvidado',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json"
            }).done(function (data) {
                if (data === 'REGISTADO COM SUCESSO') {
                    $("#message").html('<p class="alert alert-success text-center">Convidado Registado com Sucesso</p>')
                    setTimeout(function () { location.reload() }, 2000)
                } else {
                    alert(data)
                }
            })
        }
    })


    // ===================================================================================================
    $(document).on("click", ".check", function (e) {
        e.preventDefault()
        // alert()
        const id = $(this).attr("id");
        $.ajax({
            url: '?url=ChegadaConvidado',
            method: 'POST',
            data: {
                id: id
            },
            dataType: "json"
        }).done(function (data) {
            if (data === 'REGISTADO COM SUCESSO') {
                $("#resp").html('<p class="alert alert-success text-center">Convidado Registado com Sucesso</p>')
                setTimeout(function () { location.reload() }, 2000)
            } else {
                alert(data)
            }
        })

    })

    // ========================================================================================================

    $(document).on("submit", ".mesas", function (e) {
        e.preventDefault();
        $.ajax({
            url: '?url=addMesas',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json"
        }).done(function (data) {
            if (data === 'REGISTADO COM SUCESSO') {
                $("#resp").html('<p class="alert alert-success text-center">Convidado Registado com Sucesso</p>')
                setTimeout(function () { location.reload() }, 2000)
            } else {
                alert(data)
            }
        })
    })
    // ========================================================================================================
    $(document).on("submit", ".addconvidados", function (e) {
        e.preventDefault();

        function validate() {
            const nome = $("#nome").val();
            const apelido = $("#apelido").val();
            const tipo = $("#Tipo").val();
            const imagem = $("#imagem").val();
            if (nome == '') {
                $(".nomeValida").html("preencha o campo")
                $("#nome").css({ border: '1px solid red' })
                return true;
            }
            if (apelido == '') {
                $(".apelidoValida").html("preencha o campo")
                $("#apelido").css({ border: '1px solid red' })
                return true;
            }

        }
        if (validate()) {
            return false;
        } else {
            $.ajax({
                url: '?url=adicionarConvidado',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json"
            }).done(function (data) {
                if (data === 'REGISTADO COM SUCESSO') {
                    $("#message").html('<p class="alert alert-success ">Convidado Registado com Sucesso</p>')
                    setTimeout(function () { location.reload() }, 2000)
                } else {
                    alert(data)
                }
            })
        }
    })
})