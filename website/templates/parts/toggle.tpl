<div class="row row-space-after">
  <div class="col-lg-12">
    <a id="toggle_{$id}" class="btn btn-primary">{$text}</a>
  </div>
</div>

<script type="text/javascript">
	$(function() {
		$("#toggle_{$id}").click(function() {
		  $('#{$id}').toggle();
		  
		  $('html, body').animate({
        scrollTop: $('#{$id}').offset().top
      }, 300, function(){

      });
		});
	});
</script>