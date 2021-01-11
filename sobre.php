<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicidade Legal</title>
    <?php include('template/inc.head.php'); ?>
</head>
<body>

<?php include('template/inc.cabecalho.php'); ?>

<!-- INICIO DO DUVIDAS FREQUENTES -->
<div class="container">
    <div class="row">
        <div class="col-lg">
        <div class="mb-5"></div>
            <h6>DÚVIDAS FREQUENTES</h6>
            <div class="mb-4"></div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie elit vitae varius maximus. Nullam metus enim, sagittis maximus quam placerat, fermentum convallis elit. Nulla facilisi. Cras rutrum nunc sapien, tristique maximus nulla scelerisque in. Vestibulum nec neque sit amet arcu rutrum laoreet.</p>
            <div class="mb-4"></div>

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="heading1">
                        <button class="btn btn-link" data-target="#collapse1" data-toggle="collapse" aria-expanded="true" aria-controls="collapse1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</button>
                    </div>
                    <div class="collapse show" aria-labelledby="heading1" id="collapse1" data-parent="#accordion">
                        <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie elit vitae variusmaximus.Nullam metus enim, sagittis maximus quam placerat, fermentum convallis elit. Nulla facilisi.Crasrutrum nunc sapien, tristique maximus nulla scelerisque in. Vestibulum nec neque sit amet arcurutrum laoreet.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading2">
                        <button class="btn btn-link" data-target="#collapse2" data-toggle="collapse" aria-expanded="false" aria-controls="collapse2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</button>
                    </div>
                    <div class="collapse" aria-labelledby="heading2" id="collapse2" data-parent="#accordion">
                        <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie elit vitae variusmaximus.Nullam metus enim, sagittis maximus quam placerat, fermentum convallis elit. Nulla facilisi.Crasrutrum nunc sapien, tristique maximus nulla scelerisque in. Vestibulum nec neque sit amet arcurutrum laoreet.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading3">
                        <button class="btn btn-link" data-target="#collapse3" data-toggle="collapse" aria-expanded="false" aria-controls="collapse3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</button>
                    </div>
                    <div class="collapse" aria-labelledby="heading3" id="collapse3" data-parent="#accordion">
                        <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie elit vitae variusmaximus.Nullam metus enim, sagittis maximus quam placerat, fermentum convallis elit. Nulla facilisi.Crasrutrum nunc sapien, tristique maximus nulla scelerisque in. Vestibulum nec neque sit amet arcurutrum laoreet.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading4">
                        <button class="btn btn-link" data-target="#collapse4" data-toggle="collapse" aria-expanded="false" aria-controls="collapse4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</button>
                    </div>
                    <div class="collapse" aria-labelledby="heading4" id="collapse4" data-parent="#accordion">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie elit vitae variusmaximus.Nullam metus enim, sagittis maximus quam placerat, fermentum convallis elit. Nulla facilisi.Crasrutrum nunc sapien, tristique maximus nulla scelerisque in. Vestibulum nec neque sit amet arcurutrum laoreet.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-link" data-target="#collapse5" data-toggle="collapse" aria-expanded="false" aria-controls="collapse5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</button>
                    </div>
                    <div class="collapse" id="collapse5" data-parent="#accordion">
                        <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie elit vitae variusmaximus.Nullam metus enim, sagittis maximus quam placerat, fermentum convallis elit. Nulla facilisi.Crasrutrum nunc sapien, tristique maximus nulla scelerisque in. Vestibulum nec neque sit amet arcurutrum laoreet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIM DO DUVIDAS FREQUENTES -->
<?php include('template/inc.footer.php'); ?>
<?php include('template/inc.rodape.php'); ?>

<!-- JS para o collapse -->
<script>

    $('.collapse').collapse()

</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>