<div class="form-group">
  <label class="col-lg-2 control-label" for="map_id">Map</label>
    <div class="col-lg-4">
      <p class="form-control-static">
      <div id="map_canvas"></div>
      <div id="jsholder"></div>
      <script type="text/javascript" charset="utf-8">
        function loadmap() {
        	if(!$('#route_id').val()) {
        		setTimeout("loadmap()",250);
        	} else {
        		$('#jsholder').load('ajax/ajax_map.php?rid='+$('#route_id').val());
        	}
        }
        setTimeout("loadmap()",250);
      </script>
    </p>
  </div>
</div>    
