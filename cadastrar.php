<?php include './inc/cabecalho.inc.php' ?>

        <div id="mensagem" class"alert-info"></div>


        <form action="/appPHP/db/cadastro.db.php" method="POST" name="cadastro" id="cadastro"  class="form">
            
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" />
            </div>
            
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" />
            </div>
            
            <div class="form-group">
                <label for="motor">Motor</label>
                <input type="text " name="motor" id="motor" class="form-control" />
            </div>
            
            <div class="form-group">
                <label for="ano">Ano</label>
                <input type="text" name="ano" id="ano" class="form-control" />
            </div>
           
            <div class="form-group">     
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" class="form-control" />
            </div>
            
            <div class="form-group">
                <label for="cavalo">Cavalo(HP)</label>
                <input type="text" name="cavalo" id="cavalo" class="form-control" />
            </div>

            <div class="form-group">
                <label for="conEtanol">Consumo de Etanol</label>
                <input type="text" name="cosEtanol" id="conEtanol" class="form-control"/>
            </div>
            
            <div class="form-group">
                <label for="conGaso">Consumo de Gasolina</label>
                <input type="text" name="conGaso" id="conGaso" class="form-control" />
            </div>

            <div class="form-group">
                <label for="valRevisao">Valor médio das resivões</label>
                <input type="text" name="valRevisao" id="valRevisao" class="form-control" />
            </div>
            
            <div class="form-group">
                <label for="valSeguro">Valor médio do seguro</label>
                <input type="text" name="valSeguro" id="valSeguro" class="form-control" />
            </div>

            <div class="botao">
                <input type="submit" value="Salvar" class="btn btn-success xl">
                <input type="reset" value="Limpar" class="btn btn-warning xl">
            
        </form>

        <script type="text/javascript">
        $(function(){
            $("#mensagem").fadeIn();
            $("#cadastro").submit(function(){
                if($("#marca").val() === "" ||
                   $("#modelo").val()=== "" ||
                   $("#motor").val()=== "" ||
                   $("#ano").val()=== "" ||
                   $("#preco").val()=== "" ||
                   $("#conEtanol").val()=== "" ||
                   $("#conGaso").val()=== "" ||
                   $("#valSeguro").val()=== "" ||
                   $("#valRevisao").val()=== "" ||
                   $("#cavalo").val()=== ""){

                    $("#mensagem").html("Por Favor <br /> Preencher todos os campos")
                        .addClass("alert-warning")
                        .removeClass("alert-info");
                        return false;
                }else{
                    $("#mensagem").html("Enviando Dados")
                        .addClass("alert-info")
                        .removeClass("alert-warning");
                        return true;
                }
            })
        })
        </script>

<?php include './inc/rodape.inc.php' ?>
