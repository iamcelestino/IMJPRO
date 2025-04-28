<?php $this->view('partials/header') ?>

<?php $this->view('partials/mobile_nav') ?>
<div class="flex flex-col sm:flex-row">

 <?php $this->view('partials/desktop_nav') ?>

  <div class="w-full sm:w-3/4 p-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
      <div class="bg-gray-200 shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl" name="person"></ion-icon>
        </div>
        <div>
            <h4 class="text-4xl font-semibold"><?=count($estudantes)?></h4>
            <p>Estudantes</p>
        </div>
      </div>
      <div class="bg-gray-200 shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl"  name="apps"></ion-icon>
        </div>
        <div>
            <h4 class="text-4xl font-semibold"><?=$meses_pagos->numero_de_meses_pagaos?></h4>
            <p>Meses Pagos</p>
        </div>
      </div>
    </div>

    <div class="bg-gray-200 shadow-lg rounded-lg">
        <div class="container mx-auto p-4">
          <div class="overflow-x-auto">
            <div class="sm:flex items-center justify-between mb-4">
              <h1 class="font-bold text-2xl">Estudantes</h1>
              <div class="flex items-center justify-between gap-2">
                <select name="" id="" class="p-[0.3rem] border-2 border-gray-400 rounded-md w-[20%] flex-1">
                  <option value="">Filtrar classe</option>
                  <option value=""></option>
                </select>
                <div class="flex-1">
                  <a href="<?=BASE_URL?>estudante/criar_estudante" class="bg-blue-800 text-white font-bold rounded-md px-4 py-[0.3rem]">Adicionar</a>
                </div>
              </div>
            </div>
            <table class="min-w-full bg-white ">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">Nome</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">Endereco</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white"> Contacto</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white"> Data Nascimento</th>
                  <th class="px-4 py-2 border-b bg-blue-800 text-white">Acoes</th>
                </tr>
              </thead>
              <tbody>
                <?php if($estudantes): ?>
                  <?php foreach($estudantes as $estudante): ?>
                <tr class="text-center">
                  <td class="px-4 py-2 border-b"><?=escape($estudante->nome)?></td>
                  <td class="px-4 py-2 border-b"><?=escape($estudante->endereco)?></td>
                  <td class="px-4 py-2 border-b"><?=escape($estudante->contacto)?></td>
                  <td class="px-4 py-2 border-b"><?=escape($estudante->data_nascimento)?></td>
                  <td class="px-4 py-2 border-b">
                    <a href="<?=BASE_URL?>estudante/deletar/<?=$estudante->id_estudante?>"><ion-icon class="text-xl" name="create-outline"></ion-icon></a>
                    <a href="<?=BASE_URL?>estudante/editar/<?=$estudante->id_estudante?>"><ion-icon class="text-xl" name="close-circle-outline"></ion-icon></a>
                    <a href="<?=BASE_URL?>pagamento/adicionar/<?=$estudante->id_estudante?>">pagar</a>
                  </td>
                </tr>
                <?php endforeach ?>
                <?php else: ?> 
                  <h1>Não ha estudantes registrados de momento</h1>
                <?php endif ?>
              </tbody>
            </table>
    
          </div>
        </div>
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