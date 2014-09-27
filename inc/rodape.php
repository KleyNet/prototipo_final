<footer class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="copyright">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-datetimepicker.min.js"></script>
<script>
    $('#pesquisa').popover({
        container: 'body',
        html: true,
        template: '<div class="popover"><div class="arrow"></div><div class="popover-content"></div></div>',
        content: '<div class="input-group"><input type="text" class="form-control" /><span class="input-group-btn"><button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-remove"></span></button></span></div><span class="glyphicon glyphicon-remove-sign" style="display: none;"></span>',
        placement: 'right',
    });
</script>