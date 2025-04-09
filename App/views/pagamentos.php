<?php $this->view('partials/header') ?>

<?php $this->view('partials/mobile_nav') ?>
<div class="flex flex-col sm:flex-row">

 <?php $this->view('partials/desktop_nav') ?>

  <div class="w-full sm:w-3/4 p-6">
    <div class="p-6 mb-6">
      <h4 class="text-xl font-semibold mb-2">Welcome Celestino</h4>
    </div>
    <div>

    <div class="bg-white shadow-lg rounded-lg">
        <div class="container mx-auto p-4">
          <div class="overflow-x-auto">
            <div class="sm:flex items-center justify-between mb-4">
              <h1 class="font-bold text-2xl">Pagamentos</h1>
            </div>
        
            <table class="min-w-full bg-white ">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b">Nome</th>
                  <th class="px-4 py-2 border-b">Valor Pago</th>
                  <th class="px-4 py-2 border-b"> Mes Referencia</th>
                  <th class="px-4 py-2 border-b">Data Pagemento</th>
                  <th class="px-4 py-2 border-b">Acoes</th>
                </tr>
              </thead>
              <tbody>
                <?php if($pagamentos): ?>
                  <?php foreach($pagamentos as $pagamento): ?>
                <tr class="text-center">
                  <td class="px-4 py-2 border-b"><?=escape($pagamento->estudante->nome)?></td>
                  <td class="px-4 py-2 border-b"><?=$pagamento->valor_pago?></td>
                  <td class="px-4 py-2 border-b"><?=escape($pagamento->data_pagamento)?></td>
                  <td class="px-4 py-2 border-b">
                    <a href="">Eliminar</a>
                    <a href="">Editar</a>
                    <form action="">
                        <input type="number" class="" name="total" value="<?=$pagamento->valor_pago?>">
                        <a type="submit" href="<?=BASE_URL?>fatura/criar/<?=$pagamento->id_pagamento?>">pagar</a>
                    </form>
                  </td>
                </tr>
                <?php endforeach ?>
                <?php else: ?> 
                  <h1>Não ha pagamentos registrados de momento</h1>
                <?php endif ?>
              </tbody>
            </table>

    </div>
  </div>
</div>
<script>
  function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  }

</script>

</body>
</html>