<h1>Dados para Contato</h1>

<form method="POST" class="contato">
    
    <?php if ( !empty($viewData['aviso']) ) {
        echo $viewData['aviso'];
    }
    ?>
    
    <label>Nome</label><br>
    <input type="text" name="nome" ><br><br>
    <label>Email</label><br>
    <input type="email" name="email"><br><br>
    <label>Mensagem</label><br>
    <textarea name="texto" rows="5" cols="80" ></textarea><br><br>
    <input type="submit" value="Enviar Dados"/>
    
    
    
    
</form>