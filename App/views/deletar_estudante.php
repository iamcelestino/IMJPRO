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
            <?php if($estudante): ?>
            <div>
                <label class="block mb-2" for="">Nome do estudante</label>
                <input value="<?=buscar_var('nome', $estudante->nome)?>" type="text" class="p-[0.6rem] border-2 border-gray-400 rounded-md" placeholder="Nome do estudante" name="nome">
            </div>
            <div class="my-4">
                <label class="block mb-2" for="">Contacto</label>
                <input 
                    type="number" 
                    class="p-[0.6rem] border-2 border-gray-400 rounded-md" 
                    placeholder="Contacto" 
                    value="<?=buscar_var('contacto', $estudante->contacto)?>"
                    name="contacto">
            </div>
            <div>
                <label class="block mb-2" for="">Endereco</label>
                <input 
                    type="text" 
                    class="p-[0.6rem] border-2 border-gray-400 rounded-md" 
                    placeholder="Endereco" 
                    value="<?=buscar_var('endereco', $estudante->endereco)?>"
                    name="endereco">
            </div>
            <div>
                <label class="block mb-2" for="">data de nascimento</label>
                <input 
                    type="date" 
                    class="p-[0.6rem] border-2 border-gray-400 rounded-md" 
                    placeholder="Data Nascimento" 
                    value="<?=buscar_var('data_nascimento', $estudante->data_nascimento)?>"
                    name="data_nascimento">
            </div>
            <div class="my-4">
                <?php if($classes): ?>
                    <select name="classe_id" id="classe_id" class="p-[0.6rem] border-2 border-gray-400 rounded-md">
                        <option value="">Seleciona a classe</option>
                        <?php foreach($classes as $classe): ?>
                        <option value="<?=$classe->id_classe?>"><?=escape($classe->nome_classe)?></option>
                        <?php endforeach ?>
                    </select>
                <?php else: ?>
                    <h1>Nao ha classe registradas</h1>
                <?php endif ?>
            </div>
            <button type="submit" class="p-[0.6rem] bg-blue-400  rounded-md font-bold" >Deletar</button>
            <?php else: ?>
                <h1>Estudante não encontrado</h1>
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