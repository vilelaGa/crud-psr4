<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center mt-5">
            <section>
                <a href="index.php">
                    <button class="btn btn-success">Voltar</button>
                </a>
            </section>

            <section class="mt-5">
                <form method="POST">
                    <div class="form-group">
                        <label class="mt-2 mb-2">Titulo</label>
                        <input type="text" class="form-control" name="titulo">
                    </div>

                    <div class="form-group">
                        <label class="mt-2 mb-2">Descrição</label>
                        <textarea class="form-control" name="descricao" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="mt-2 mb-2">Status</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <label class="form-control">
                                    <input type="radio" name="ativo" value="s" checked> Ativo
                                </label>

                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-control">
                                    <input type="radio" name="ativo" value="n"> Não ativo
                                </label>

                            </div>

                        </div>

                    </div>

                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </section>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>