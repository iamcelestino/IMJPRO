<?php $this->view('partials/header') ?>

<?php $this->view('partials/mobile_nav') ?>
<div class="flex flex-col sm:flex-row">

 <?php $this->view('partials/desktop_nav') ?>

  <div class="w-full sm:w-3/4 p-6">
    <div>

    <div class="bg-white shadow-lg rounded-lg">
        <div class="container mx-auto p-4">
          <div class="overflow-x-auto">
            <div class="sm:flex items-center justify-between mb-4">
              <h1 class="font-bold text-2xl">Faturas</h1>
            </div>
        
            <table class="min-w-full bg-white ">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white"># de fatura</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">Estudante</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">Data Pagemento</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">valor pago</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">Acoes</th>
                </tr>
              </thead>
              <tbody>
                <?php if($faturas): ?>
                  <?php foreach($faturas as $fatura): ?>
                <tr class="text-center">
                  <td class="px-4 py-2 border-b"><?=$fatura->id_fatura?></td>
                  <td class="px-4 py-2 border-b"><?=$fatura->estudante->nome?></td>
                  <td class="px-4 py-2 border-b"><?=escape($fatura->pagamento->data_pagamento)?></td>
                  <td class="px-4 py-2 border-b"><?=$fatura->pagamento->valor_pago?></td>
                  <td class="px-4 py-2 border-b">
                      <a href="">
                        <ion-icon class="text-xl" name="create-outline"></ion-icon>
                      </a>
                      <a href="">
                        <ion-icon class="text-xl" name="close-circle-outline"></ion-icon>
                      </a>
                      <a href="<?=BASE_URL?>fatura/gerar_fatura/<?=$fatura->estudante->id_estudante?>">
                        <ion-icon class="text-xl" name="download-outline"></ion-icon>
                      </a>
                  </td>
                </tr>
                <?php endforeach ?>
                <?php else: ?> 
                  <h1>Não ha fatura registrados de momento</h1>
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