    <div class="page-content">
      <!-- BEGIN PAGE CONTENT-->
      <div class="row">
        <div class="col-md-12">
            <div class="portlet light">
              <div class="portlet-body">
                <div class="tabbable">
                  <div class="tab-content no-space">
                    <!--  PEDIDOS  -->
                                        <div class="tab-pane active" id="tab_general">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>E-mail:</strong> <?php echo $email; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
                                                </div>
                                              <div class="col-md-6">
                                                    <p><strong>Cpf:</strong> <?php echo $cpf; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>Celular:</strong> <?php echo $celular; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>Endereço:</strong> <?php echo $endereco.', '.$numero;; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>Complemento:</strong> <?php echo $complemento; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>Bairro:</strong> <?php echo $bairro; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>Cidade / Estado:</strong> <?php echo $cidade.' - '.$estado; ?></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>CEP:</strong> <?php echo $cep; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane active">
                      <!--  repeat -->
                      <?php echo $pedidos; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- END PAGE CONTENT-->
    </div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="<?php echo URL::base(); ?>assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo URL::base(true); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL::base(true); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo URL::base(true); ?>assets/global/scripts/datatable.js"></script>
<script src="<?php echo URL::base(true); ?>assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<script src="<?php echo URL::base(); ?>assets/global/scripts/meiomask.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>

jQuery(document).ready(function(e) {

    window.print();

    $('.navbar-fixed-top').hide();

  $('input[data-mask]').each(function() {
      var input = $(this);
        input.setMask(input.data('mask'));
  });

  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Demo.init(); // init demo features

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
