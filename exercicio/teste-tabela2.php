<form action="" method="post">
    <input name="nome" placeholder="Nome"> <br>
    
    <input name="sobrenome" placeholder="Sobrenome"> <br>
    
    <input name="idade" placeholder="Idade"> <br>

    <button>Enviar</button>
</form>
<p>
<table border = "1">
    
    <tr>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Idade</td>
    </tr>
    
    <tr>
        <td><?php echo $_POST['nome']; ?></td>
        <td><?php echo $_POST['sobrenome']; ?></td>
        <td><?php echo $_POST['idade']; ?></td>
    </tr>
    
   

</table>     

    





