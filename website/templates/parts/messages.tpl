{if count($msgs)}
  <div class="alert alert-success">
    <ul>
      {foreach $msgs as $msg}
      <li>{$msg}</li>
      {/foreach}
    </ul>
  </div>
{/if}
{if count($errors)}
  <div class="alert alert-danger">
    <ul>
  {foreach $errors as $err}
    <li>{$err}</li>
    {/foreach}
    </ul>
  </div>
{/if}