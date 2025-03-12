<?php $this->view('partials/header') ?>

<?php $this->view('partials/mobile_nav') ?>
<div class="flex flex-col sm:flex-row">

 <?php $this->view('partials/desktop_nav') ?>

  <div class="w-full sm:w-3/4 p-6">
    <div class="p-6 mb-6">
      <h4 class="text-xl font-semibold mb-2">Welcome Celestino</h4>
    </div>
    <div>
        <form action="" method="POST">
            <?php if($classe): ?>
            <div>
                <label class="block mb-2" for="">Nome Classe</label>
                <input value="<?= buscar_var('nome_classe', $classe->nome_classe)?>" type="text" class="p-[0.6rem] border-2 border-gray-400 rounded-md" placeholder="Nome de classe" name="nome_classe">
            </div>
            <div class="my-4">
                <label class="block mb-2" for="">Valor da propina</label>
                <input value="<?= buscar_var('valor_propina', $classe->valor_propina)?>"  type="number" class="p-[0.6rem] border-2 border-gray-400 rounded-md" placeholder="Valor da propina" name="valor_propina">
            </div>
            <div>
                <label class="block mb-2" for="">Periodo Letivo</label>
                <input value="<?= buscar_var('periodo_letivo', $classe->periodo_letivo)?>" type="text" class="p-[0.6rem] border-2 border-gray-400 rounded-md" placeholder="Periodo Letivo" name="periodo_letivo">
            </div>
            <button type="submit" class="p-[0.6rem] bg-blue-400  rounded-md font-bold" >Deletar</button>
            <?php else: ?>
                <h1>Nenhum produto para deletar</h1>
            <?php endif ?>
        </form>
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