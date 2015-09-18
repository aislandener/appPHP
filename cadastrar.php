<?php include './inc/cabecalho.inc.php' ?>
        <form action="/appPHP/db/cadastro.db.php" method="POST" name="cadastro">
            
            <div class="campo">
                <label for="marca">Marca<label>
                <input type="text" name="marca" id="marca" />
            </div>
            
            <div class="campo">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" />
            </div>
            
            <div class="campo">
                <label for="motor">Motor</label>
                <input type="number " name="motor" id="motor" />
            </div>
            
            <div class="campo">
                <label for="ano">Ano</label>
                <input type="number" name="ano" id="ano" />
            </div>
           
            <div class="campo">     
                <label for="preco">Preço</label>
                <input type="number" name="preco" id="preco" />
            </div>
            
            <div class="campo">
                <label for="cavalo">Cavalo(HP)</label>
                <input type="number" name="cavalo" id="cavalo" />
            </div>

            <div class="campo">
                <label for="conEtanol">Consumo de Etanol</label>
                <input type="number" name="cosEtanol" id="conEtanol" />
            </div>
            
            <div class="campo">
                <label for="conGaso">Consumo de Gasolina</label>
                <input type="number" name="conGaso" id="conGaso" />
            </div>

            <div class="campo">
                <label for="valRevisao">Valor médio das resivões</label>
                <input type="number" name="valRevisao" id="valRevisao" />
            </div>
            
            <div class="campo">
                <label for="valSeguro">Valor médio do seguro</label>
                <input type="number" name="valSeguro" id="valSeguro" />
            </div>

            <div class="botao">
                <input type="submit" value="Salvar">
                <input type="reset" value="Limpar">
            
        </form>
<?php include './inc/rodape.inc.php' ?>
