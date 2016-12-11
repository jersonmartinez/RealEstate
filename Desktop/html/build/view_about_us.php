<div class="container-fluid">
    <div class="side-body padding-top">
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h4 style="text-shadow: 0 1px 1px #000;"><b>REDACTA EL ASUNTO "SOBRE NOSOTROS", QUE APARECERÁ EN LA PÁGINA PRINCIPAL</b></h4>
                        <?php include ("edit/index.html"); ?>
                        <button type="button" class="btn btn-primary" style="float: right;" onclick="javascript: AddNowAboutUs();">Agregar ahora</button>
                    </div>
                </div>
            </div>
            <form id="FormAddNowAboutUs">
                <textarea id="write_aboutUs" style="display: none;" name="write_aboutUs"></textarea><br/>
            </form>
            <?php include ("build/modals.php"); ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("document").ready(function(){
        loadAboutUs();
    });
</script>