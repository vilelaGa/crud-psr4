<?php

$resultados = '';

foreach ($vagas as $vaga) {
    $resultados .= ' <tr>
                        <th scope="row">' . $vaga->id . '</th>
                            <td>' . $vaga->titulo . '</td>
                            <td>' . $vaga->descricao . '</td>
                            <td>' . ($vaga->ativo == 's' ? 'ATIVO' : 'INATIVO') . '</td>
                            <td>' . date('d/m/Y à\s H:i:s', strtotime($vaga->dataa)) . '</td>
                            <td><a href="editar.php?id='.$vaga->id.'"><button type="button" class="btn btn-primary">Editar</button></a></td>
                            <td><a href="deletar.php?id='.$vaga->id.'"><button type="button" class="btn btn-danger">Deletar</button></a></td>
                    </tr>';
}


?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <section>
                <h3 class="mb-4">Exemplo de CrudPhp com OO</h3>
                <a href="cadastrar.php">
                    <button class="btn btn-success">Nova vaga</button>
                </a>



                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Status</th>
                            <th scope="col">Data</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $resultados ?>
                    </tbody>
                </table>

            </section>


        </div>
    </div>
</div>