<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicidade Legal</title>
    <?php include('template/inc.head.php'); ?>
</head>
<body>

<?php include('template/inc.header.php'); ?>

<!-- INICIO DO FORMULARIO -->
<div class="container">
    <div class="row">
        <div class="col-lg">
        <div class="mb-5"></div>
            <form>
                <div class="form-group">
                    <h6>ENVIO DE MATERIAIS</h6>
                    <div class="mb-3"></div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie elit vitae varius maximus. Nullam metus enim, sagittis maximus quam placerat, fermentum convallis elit. Nulla facilisi. Cras rutrum nunc sapien, tristique maximus nulla scelerisque in. Vestibulum nec neque sit amet arcu rutrum laoreet.</p>
                    
                    <div class="form-text">
                        <label for="form-control-nome">NOME</label>
                        <input type="text" class="form-control" id="form-control-nome" />
                            
                        <label for="form-control-email">E-MAIL</label>
                        <input type="text" class="form-control" id="form-control-email" />
                    
                        <label for="form-control-telefone">TELEFONE</label>
                        <input type="text" class="form-control" id="form-control-telefone" />

                        <label for="form-control-arquivos">ADICIONAR ARQUIVOS</label>
                        <input type="file" class="form-control-file input" id="form-control-arquivos" multiple />

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary bottom">ENVIAR</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FIM DO FORMULARIO -->

<?php include('template/inc.footer.php'); ?>
<?php include('template/inc.rodape.php'); ?> 

</body>
</html>