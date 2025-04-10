<?php $this->view('partials/header') ?>

<?php $this->view('partials/mobile_nav') ?>
<div class="flex flex-col sm:flex-row">

 <?php $this->view('partials/desktop_nav') ?>

  <div class="w-full sm:w-3/4 p-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl" name="person"></ion-icon>
        </div>
        <div>
            <h4 class="text-4xl font-semibold"><?=count($estudantes)?></h4>
            <p class="font-bold"># de Estudantes</p>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl"  name="apps"></ion-icon>
        </div>
        <div>
            <h4 class="text-4xl font-semibold">0</h4>
            <p class="font-bold">Funcionarios</p>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl"  name="apps"></ion-icon>
        </div>
        <div>
            <h4 class="text-4xl font-semibold"><?=count($pagamentos)?></h4>
            <p class="font-bold">Pagamentos Efectuados</p>
        </div>
      </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-6">
        <div class="bg-white shadow-lg rounded-lg p-8">
            <div>
              <canvas id="status"></canvas>
            </div>
        </div>

        <div class="shadow-lg rounded-lg p-8">
            <h1 class="font-bold mb-2">Estudantes e pagamentos</h1>
            <div>
              <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-lg rounded-lg">
        <div class="container mx-auto p-4">
          <div class="overflow-x-auto">
            <div class="sm:flex items-center justify-between mb-4">
              <h1 class="font-bold text-xl">Pagamentos recentes</h1>
            </div>
        
            <table class="min-w-full bg-white ">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b">Nome</th>
                  <th class="px-4 py-2 border-b">Email</th>
                  <th class="px-4 py-2 border-b">Endereco</th>
                </tr>
              </thead>
              <tbody>
                
                <tr class="text-center">
                  <td class="px-4 py-2 border-b"></td>
                  <td class="px-4 py-2 border-b"></td>
                  <td class="px-4 py-2 border-b"></td>
                  <td class="px-4 py-2 border-b"></td>
                </tr>
            
              </tbody>
            </table>
    
          </div>
        </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

  const ctx = document.getElementById('myChart');
  const statusGrafico = document.getElementById('status');

  const estudantes = <?= count($estudantes) ?>;
  const pagamentos = <?= count($pagamentos) ?>;
  const status = <?= json_encode($status) ?>;

  console.log("Estudantes:", estudantes);
  console.log("Pagamentos:", pagamentos);
  console.log("Pagamentos:", status);

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Estudantes', 'Pagamentos'],
      datasets: [{
        label: 'Total',
        data: [estudantes, pagamentos],
        backgroundColor: ['#3490dc', '#38c172'],
        borderColor: ['#2779bd', '#1f9d55'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });


    new Chart(statusGrafico, {
    type: 'polarArea',
    data: {
      labels: ['Pendente', 'Pago', 'Atrasado'],
      datasets: [{
        label: 'Total',
        data: [status[0], status[1], status[2]],
        backgroundColor: ['#f59e0b', '#10b981', '#ef4444'],
        borderColor: ['#d97706', '#059669', '#dc2626'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top'
        },
        title: {
          display: true,
          text: 'Estado dos Pagamentos'
        }
      }
    }
  });

  function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  }
</script>


</body>
</html>