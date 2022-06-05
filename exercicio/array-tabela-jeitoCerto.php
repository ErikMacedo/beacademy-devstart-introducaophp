<?php
$a1 = [
    "nome" => "Leo",
    "email"=> "leo2001@gmail.com",
    "telefone" => "81 999889768",
];

$a2 = [
    "nome" => "Larissa",
    "email"=> "larissa2001@gmail.com",
    "telefone" => "81 997676768",
];

$a3 = [
    "nome" => "Dan",
    "email"=> "daniel2001@gmail.com",
    "telefone" => "81 994553768",
];

$alunos = [
$a1,
$a2,
$a3,

];
?>
<!-- CSS Bootstrap only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    
    <h1 class="mt-5">Alunos</h1>
    <hr>    
    
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>

        <tbody>
    <?php
            foreach ($alunos as $dados) {
            echo "<tr>";
                
                echo "<td> {$dados["nome"]} </td>";
                echo "<td> {$dados["email"]} </td>";
                echo "<td> {$dados["telefone"]} </td>";

            echo "</tr>";
            }
                



    ?>
        </tbody>










    </table>
</div>

