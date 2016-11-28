<div class="container-fluid">
    <div class="side-body padding-top">
        <div class="row">
            <div class="col-xs-12">
                <h4>Redacta el asunto "Sobre nosotros" que aparecerá en la página principal.</h4>
                <?php include ("edit/index.html"); ?>
                <button type="button" class="btn btn-primary" style="float: right;" onclick="javascript: AddNowAboutUs();">Agregar ahora</button>
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