<?php $this->view('partials/header') ?>

<?php $this->view('partials/mobile_nav') ?>
<div class="flex flex-col sm:flex-row">

 <?php $this->view('partials/desktop_nav') ?>

  <div class="w-full sm:w-3/4 p-6">
    
      <div class="sm:flex items-center gap-6">
          <div class="bg-gray-200 shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4 flex-1">
            <div class="bg-indigo-200 p-4 rounded-full">
                <ion-icon class="text-4xl" name="person"></ion-icon>
            </div>
            <div>
                <h4 class="text-3xl font-bold"><?=count($pagamentos)?></h4>
                <p class="font-bold">Pagamentos</p>
            </div>
          </div>
        <div class="bg-gray-200 shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4 flex-1">
            <div class="bg-indigo-200 p-4 rounded-full">
                <ion-icon class="text-4xl"  name="apps"></ion-icon>
            </div>
            <div>
                <h4 class="text-3xl font-bold"><?=count($pagamentos_atrasados)?></h4>
                <p class="font-bold">Pagamentos Atrasados</p>
            </div>
        </div>
      </div>

    <div class="bg-gray-200 shadow-lg rounded-lg mt-6">
        <div class="container mx-auto p-4">
          <div class="overflow-x-auto">
            <div class="sm:flex items-center justify-between mb-4">
              <h1 class="font-bold text-2xl">Pagamentos</h1>
            </div>
        
            <table class="min-w-full bg-white ">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">Nome</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">Valor Pago</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white"> Data Pagamento</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">Acoes</th>
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
                    <a href="">
                      <ion-icon class="text-xl" name="create-outline"></ion-icon>
                    </a>
                    <a href="">
                      <ion-icon class="text-xl" name="close-circle-outline"></ion-icon>
                    </a>
                    <a href="<?=BASE_URL?>fatura/criar/<?=$pagamento->id_pagamento?>">
                      <ion-icon class="text-xl" name="document-outline"></ion-icon>
                    </a>
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