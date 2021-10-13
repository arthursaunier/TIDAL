{assign var="home" value=""}
{assign var="patho" value=""}
{assign var="infos" value=""}
{assign var="signup" value=""}

{{if $active == "home"}
  {assign var="home" value="active"}
{elseif $active == "pathologies"}
  {assign var="patho" value="active"}
{elseif $active == "infos"}
  {assign var="infos" value="active"}
{else}
  {assign var="signup" value="active"}
{/if}}

<header class="mb-auto">
      <div>
        <h1>Acupuncture.com</h1>
        <nav class="nav nav-masthead justify-content-center ">
          <a class="nav-link {$home}" aria-current="page" href="Home.html">Home</a>
          <a class="nav-link {$patho}" href="Pathologies.html">Pathologies</a>
          <a class="nav-link {$infos}" href="Infos.html">Infos</a>
          <a class="nav-link {$signup}" onclick="afficher()">Connexion</a>
        </nav>
        <div class="d-flex h-100 justify-content-center text-white">
          <div id="auth" class="text-center"></div>
        </div>
      </div>
    </header>

    