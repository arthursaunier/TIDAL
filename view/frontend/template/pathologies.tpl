
{include file="/home/web/Documents/TIDAL/view/frontend/template/header.tpl" title="pathologies"}

<body class="d-flex h-100 text-center text-white bg-dark">

  <div class="container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column">
    {include file="/home/web/Documents/TIDAL/view/frontend/template/navbar.tpl" active="pathologies"}

    <main class="px-3">

      <div class="container">
        <div class="row">
          <div class="list-group col-3">
            <a href="#" class="list-group-item list-group-item-action">Méridien</a>
            <div class="list-group-item">
              <a href="#" class="list-group-item">Item 1.1</a>
              <a href="#" class="list-group-item">Item 1.2</a>
              <a href="#" class="list-group-item">Item 1.3</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action">Type de pathologie</a>
            <div class="list-group-item">
              <a href="#" class="list-group-item">Item 1.1</a>
              <a href="#" class="list-group-item">Item 1.2</a>
              <a href="#" class="list-group-item">Item 1.3</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action">Caractéristiques</a>
            <div class="list-group-item">
              <a href="#" class="list-group-item">Item 1.1</a>
              <a href="#" class="list-group-item">Item 1.2</a>
              <a href="#" class="list-group-item">Item 1.3</a>
            </div>
          </div>
          <div class="list-group col-lg-9 d-flex flex-column overflow-auto">
            {foreach from=$reqlist item=elem}
            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 ">
              <img src="../../../public/Images/aiguille.png" alt="twbs" width="32" height="32"
                class="rounded-circle flex-shrink-0">
              <div class="gap-2 w-100 justify-content-between">
                <h6 class="mb-0">{$elem.patho}</h6>
                <p class="mb-0 opacity-75">{$elem.symptome}</p>
                <p class="mb-0 opacity-75">{$elem.meridien}</p>
              </div>
            </a>
            {/foreach}
          </div>
        </div>
      </div>
    </main>

    {include file="/home/web/Documents/TIDAL/view/frontend/template/footer.tpl"}
  </div>



</body>

</html>