<?php $this->view('partials/header') ?>

<?php $this->view('partials/mobile_nav') ?>
<div class="flex flex-col sm:flex-row">

 <?php $this->view('partials/desktop_nav') ?>

  <div class="w-full sm:w-3/4 p-6">
    <div class="p-6 mb-6">
      <h4 class="text-xl font-semibold mb-2">Welcome Celestino</h4>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl" name="person"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold"></h4>
            <p></p>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl"  name="apps"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold"></h4>
            <p></p>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl" name="cash"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold"></h4>
            <p></p>
        </div>
      </div>
    </div>

    <div class="bg-white shadow-lg rounded-lg">
        <div class="container mx-auto p-4">
          <div class="overflow-x-auto">
            <div class="sm:flex items-center justify-between mb-4">
              <h1 class="font-bold text-2xl">Lista de Estudantes</h1>
            </div>
        
            <table class="min-w-full bg-white ">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b">Nome</th>
                  <th class="px-4 py-2 border-b">Endereco</th>
                  <th class="px-4 py-2 border-b"> Contacto</th>
                  <th class="px-4 py-2 border-b"> Data_nascimento</th>
                  <th class="px-4 py-2 border-b">Classe</th>
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