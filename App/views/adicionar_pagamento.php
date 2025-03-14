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
            <div class="sm:grid sm:grid-cols-2 gap-10">
              <div>
                <div>
                    <label class="block mb-2" for="">Data Pagamento</label>
                    <input type="text" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full" placeholder="Data pagamento" name="data_pagamento">
                </div>
                <div class="my-4">
                    <label class="block mb-2" for="">Valor Pago</label>
                    <input type="number" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full" placeholder="Valor Pago" name="valor_pago">
                </div>
                <div>
                    <label class="block mb-2" for="">Mes de Referencia</label>
                    <input type="text" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full" placeholder="Mes referencia" name="mes_referencia">
                </div>
              </div>
              <div>
                <div>
                    <label class="block mb-2" for="">Descricao</label>
                    <input type="text" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full" placeholder="descricao" name="descricao">
                </div>
                <div class="my-4">
                    <label class="block mb-2" for="">Status</label>
                    <input type="number" class="p-[0.6rem] border-2 border-gray-400 rounded-md w-full" placeholder="status" name="status">
                </div>
              </div>
            </div>
            <button type="submit" class="p-[0.6rem] bg-blue-400  rounded-md font-bold" >Criar Estudante</button>
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