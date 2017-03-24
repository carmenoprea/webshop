<div class="jumbotron">
  <h1>PC World</h1>
  <p>We specialize in computer solutions</p>
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscribe</button>
  </form>

  {if $showLogin}
      {include file ="/templates/login.tpl"}
  {/if}

</div>
