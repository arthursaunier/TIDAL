{include file="/home/web/Documents/TIDAL/view/frontend/template/header.tpl" title="pathologies"}

<body class="d-flex h-100 text-center text-white bg-dark">

  <div class="container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column">
    {include file="/home/web/Documents/TIDAL/view/frontend/template/navbar.tpl" active="pathologies"}

    <main class="px-3">

      <div class="container">
        <div class="row">

          <div class="list-group col-3 ">
            <a href="index.php?action=pathologie" class="list-group-item list-group-item-action">Reset filtre</a>
            <h2>Méridiens</h2>
            <div class="filter overflow-auto">
              {foreach from=$reqlistmer item=elem}
              <a href="index.php?action=meridien&meridien={$elem.meridien}"
                class="list-group-item list-group-item-action">{$elem.meridien}</a>
              {/foreach}
            </div>
            <h2>Pathologies</h2>
            <div  class="filter overflow-auto">
              
              {foreach from=$reqlistpatho item=elem}
              <a href="index.php?action=patho&patho={$elem.pathologie}"
                class="list-group-item list-group-item-action">{$elem.pathologie}</a>
              {/foreach}
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