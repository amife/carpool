<div class="form-group{if isset($error) && $error} has-error{/if}">
  <label class="col-lg-2 control-label" for="{$name}">
    {$description}
  </label>

  <div class="col-lg-4{if isset($class) && $class} {$class}{/if}"{if isset($id) && $id} id="{$id}"{/if}>
    {if isset($static) && $static}
        <p class="form-control-static">
            <strong>{$value}</strong>
        </p>
    {elseif isset($select) && $select}
        {assign "extra2" ""}{if isset($extra) && $extra}{assign "extra2" $extra}{/if}
        {c2r_getHtmlSelect($name, $values, 'name', $value, "class=\"form-control\" $extra2")}
    {elseif isset($radio) && $radio}
        <input type="radio" name="default" value="{$un->id}" {if ($un->is_default)}checked="checked"{/if} />
        {$un->number}  
        {if (!$un->is_default)}
            <a href="profile.php?number_delete={$un->id}{if ($admin_view)}&amp;uid={$uid}{/if}">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        {/if}
    {elseif isset($image) && $image}
        <img class="gravatar" src="{$value}" alt="" />
    {else}
        {if isset($date) && $date}
          <div class="input-group date" id="dp_{$name}" data-date="{$value}" data-date-format="yyyy-mm-dd"> 
            <input class="form-control" type="text" readonly="" value="{$value}" name="{$name}"> 
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
          </div>
          <script type="text/javascript">
          	  $(function() {
        	  	  $('#dp_{$name}').datepicker({
                todayBtn: "linked",
                autoclose: true,
                todayHighlight: true
              });
        	});
          </script>
        {else}
          <input{if isset($type) && $type} type="{$type}"{/if} name="{$name}" class="form-control" id="{$name}" placeholder="{$placeholder}" value="{$value}">
        {/if}
    {/if}
    {if isset($helpblock) && $helpblock}
        <p class="help-block">{$helpblock}</p>
    {/if}
    {if isset($error) && $error}
        <span class="help-block">{$error}</span>
    {/if}
  </div>
  {if isset($info) && $info}
      {include file="parts/info.tpl" info=$info}
  {/if}
  
  {if isset($text) && $text}
      <p class="form-control-static">
        {$text}
      </p>
  {/if}
</div>