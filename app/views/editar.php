<div class="row container">
    <div class="col s12">
        <h3 class="light">PÁGINA DE EDIÇÃO</h3>
    </div>

    <div class="col s12">
        <form action="/Curso-PHP-MVC/Site/alterar/" method="post">

            <?php foreach($editar as $registro){?> 

             <input type="hidden" name="id" value="<?php echo $registro['id']?>">

            <div class="input-field col s12 m6 l6">
                <input type="text" name="nome" id="nome" value="<?php echo $registro['nome']?>" required>
                <label for="nome" class="for">Digite seu nome</label>
            </div>

            <div class="input-field col s12 m6 l6">
                <input type="email" name="email" id="email" value="<?php echo $registro['email']?>" required>
                <label for="email" class="for">Digite seu email</label>
            </div>
            
            <div class="input-field col s12">
                <input type="submit" value="Alterar" class="btn-small green ">
                <input type="reset" value="Limpar" class="btn-small red">
            </div>       
            <?php }?>
        </form>  
    
    </div>
</div>
