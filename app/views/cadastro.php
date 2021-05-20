<div class="row container">
    <div class="col s12">
        <h3 class="light">PÁGINA DE CADASTRO</h3>
    </div>

    <div class="col s12">
        <form action="/Curso-PHP-MVC/Site/cadastrar/" method="post">
            <div class="input-field col s12 m6 l6">
                <input type="text" name="nome" id="nome" required>
                <label for="nome" class="for">Digite seu nome</label>
            </div>

            <div class="input-field col s12 m6 l6">
                <input type="email" name="email" id="email" required>
                <label for="email" class="for">Digite seu email</label>
            </div>
            
            <div class="input-field col s12">
                <input type="submit" value="Enviar" class="btn-small green ">
                <input type="reset" value="Limpar" class="btn-small red">
            </div>            
                 
        </form>   
    </div>
</div>