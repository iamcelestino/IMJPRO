<?php $this->view('partials/header') ?>

<?php $this->view('partials/mobile_nav') ?>
<div class="flex flex-col sm:flex-row">

 <?php $this->view('partials/desktop_nav') ?>

  <div class="w-full sm:w-3/4 p-6">
    <div class="">
      <h4 class="text-xl font-semibold mb-2">Welcome Celestino</h4>
    </div>
    <div>
      <h1 class="font-bold text-xl mb-4">Efetuar Pagamento</h1>
        <form action="" method="POST">
            <div class="sm:grid sm:grid-cols-2 gap-10">
              <div>
                <div>
                    <label class="block mb-2" for="">Data Pagamento</label>
                    <input type="date" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full" placeholder="Data pagamento" name="data_pagamento">
                </div>
                <div class="my-4">
                    <label class="block mb-2" for="">Valor Pago</label>
                    <input type="number" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full" placeholder="Valor Pago" name="valor_pago">
                </div>
                <div class="mb-4 border-2 border-gray-400 rounded-md p-2">
                  <?php foreach ($meses as $mes): ?>
                      <label>
                          <input type="checkbox" name="meses[]" value="<?= $mes ?>">
                          <?= $mes ?>
                      </label>
                  <?php endforeach; ?>
                </div>
                <br>
              </div>
              <div>

                <div>
                    <label class="block mb-2" for="">Descricao</label>
                    <input type="text" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full" placeholder="descricao" name="descricao">
                </div>
                <div class="my-4">
                  <label class="block mb-2" for="">O estda de pagamento</label>
                    <select name="status" id="" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full">
                      <option value="">Status do Pagamento</option>
                      <option value="Pendente">Pendente</option>
                      <option value="Pago">Pago</option>
                      <option value="Atrasado">Atrasado</option>
                    </select>
                </div>
                <div>
                  <label class="block mb-2" for="">Tipo de Pagamento</label>
                    <select name="nome" id="" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full">
                      <option value="">Seleciona o tipo de Pagamento</option>
                      <option value="transferencia bancaria">Transferencia Bancaria</option>
                      <option value="cash">Cash</option>
                      <option value="cartão de credito">Cartao de credito</option>
                    </select>
                </div>
              </div>
            </div>
            <button type="submit" class="p-[0.6rem] bg-blue-400  rounded-md font-bold" >Efectuar Pagamento</button>
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