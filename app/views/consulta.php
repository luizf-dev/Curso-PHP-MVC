<div class="row container">
    <div class="col s12">
        <h3 class="light center red-text">PÁGINA DE CONSULTAS</h3>
    </div>

    <div class="col s12">    
        <table class="table highlight">
                <thead >
                    <tr>  
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>TOOLS</th>                        
                    </tr>
                </thead> 
                <tbody>     
                     <?php foreach($consulta as $registro){?>
                     <tr>
                        <td><?php echo $registro['nome']; ?></td>
                        <td><?php echo $registro['email']; ?></td>
                        <td>
                            <a href="/Curso-PHP-MVC/Site/editar&id=<?php echo base64_encode($registro['id'])?>">Editar</a> |
                            <a class="red-text" href="/Curso-PHP-MVC/Site/deletar&id=<?php echo base64_encode($registro['id'])?>" onclick="return confirm('Deseja realmente excluir este registro?')">Deletar</a> 
                        </td>       
                    </tr>
                <?php } ?>                   
                </tbody>
            </table>
           
    </div>
</div>