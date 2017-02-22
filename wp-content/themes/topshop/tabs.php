
<div>
  <h2>Promociones</h2>
  <!-- Nav tabs -->
  <div class="row">
  <div class="col-md-12">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#promociones" aria-controls="promociones" role="tab" data-toggle="tab" class="promotion">Promociones</a></li>
  </ul>
  </div>
  </div>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="promociones">[bestselling_product_categories cats="44" per_cat="5" columns="3"]</div>
  </div>
</div>
  
<div>
<h2>Nuestros productos más vendidos</h2>
  <!-- Nav tabs -->
  <div class="row">
  <div class="col-md-12">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#casual" aria-controls="casual" role="tab" data-toggle="tab">Casual</a></li>
    <li role="presentation"><a href="#deportivo" aria-controls="deportivo" role="tab" data-toggle="tab">Deportivo</a></li>
    <li role="presentation"><a href="#formal" aria-controls="formal" role="tab" data-toggle="tab">Formal</a></li>
    <li role="presentation"><a href="#medico" aria-controls="medico" role="tab" data-toggle="tab">Medico</a></li>
    <li role="presentation"><a href="#trabajo-rudo" aria-controls="trabajo-rudo" role="tab" data-toggle="tab">Trabajo rudo</a></li>
  </ul>
  </div>
  </div>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="casual">[bestselling_product_categories cats="37" per_cat="3" columns="3"]</div>
    <div role="tabpanel" class="tab-pane" id="deportivo">[bestselling_product_categories cats="40" per_cat="3" columns="3"]</div>
    <div role="tabpanel" class="tab-pane" id="formal">[bestselling_product_categories cats="36" per_cat="3" columns="3"]</div>
    <div role="tabpanel" class="tab-pane" id="medico">[bestselling_product_categories cats="39" per_cat="3" columns="3"]</div>
    <div role="tabpanel" class="tab-pane" id="trabajo-rudo">[bestselling_product_categories cats="38" per_cat="3" columns="3"]</div>
  </div>

</div>

<script type="text/javascript">
	$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>