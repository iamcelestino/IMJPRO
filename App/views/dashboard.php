<?php $this->view('partials/header') ?>

<nav class="bg-blue-800 text-white p-4 block sm:hidden">
  <div class="flex items-center justify-between">
    <div class="flex items-center">
        <ion-icon class="text-3xl" name="pie-chart"></ion-icon>
        <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">IMJPRO</a></h1>
    </div>
    <button class="text-white focus:outline-none" onclick="toggleMenu()">
      <span class="block w-6 h-0.5 bg-white mb-1"></span>
      <span class="block w-6 h-0.5 bg-white mb-1"></span>
      <span class="block w-6 h-0.5 bg-white"></span>
    </button>
  </div>
  <div class="mt-2 hidden" id="mobile-menu">
  <ul class="space-y-2">
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="home-outline" class="mr-2"></ion-icon>
                Dashboard
            </a>
        </li>

        
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="people-outline" class="mr-2"></ion-icon>
                    Estudantes
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos Estudantes</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Adicionar Estudante</a>
                </li>
            </ul>
        </li>

    
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="school-outline" class="mr-2"></ion-icon>
                    Professores
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos professores</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">adicionar professores</a>
                </li>
            </ul>
        </li>

    
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="wallet-outline" class="mr-2"></ion-icon>
                    Cursos
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos os Cursos</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Adicionar Cursos</a>
                </li>
            </ul>
        </li>

       
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="book-outline" class="mr-2"></ion-icon>
                Disciplina
            </a>
        </li>

        
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="settings-outline" class="mr-2"></ion-icon>
                Definicoes
            </a>
        </li>
    </ul>
  </div>
</nav>

<div class="flex flex-col sm:flex-row">
  <div class="hidden sm:block w-full sm:w-1/4 bg-blue-800 text-white h-screen p-4">
     <div class="flex items-center mb-6">
        <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">IMJPRO</a></h1>
    </div>
    <ul class="space-y-2">
        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="home-outline" class="mr-2"></ion-icon>
                Dashboard
            </a>
        </li>

        
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="people-outline" class="mr-2"></ion-icon>
                    Estudantes
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos Estudantes</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Adicionar Estudante</a>
                </li>
            </ul>
        </li>

    
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="school-outline" class="mr-2"></ion-icon>
                    Professores
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos professores</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">adicionar professores</a>
                </li>
            </ul>
        </li>

    
        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="wallet-outline" class="mr-2"></ion-icon>
                    Cursos
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todos os Cursos</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Adicionar Cursos</a>
                </li>
            </ul>
        </li>

        <li class="group">
            <div class="flex items-center justify-between px-4 py-2 hover:bg-blue-700 cursor-pointer">
                <div class="flex items-center">
                    <ion-icon name="wallet-outline" class="mr-2"></ion-icon>
                    Disciplina
                </div>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </div>
            <ul class="hidden group-hover:block bg-blue-900">
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Todas as Disciplinas</a>
                </li>
                <li class="hover:bg-blue-700">
                    <a class="block px-6 py-2" href="#">Adicionar Disciplinas</a>
                </li>
            </ul>
        </li>

        <li class="hover:bg-blue-700">
            <a class="flex items-center px-4 py-2" href="#">
                <ion-icon name="settings-outline" class="mr-2"></ion-icon>
                Definicoes
            </a>
        </li>
    </ul>
  </div>

  <div class="w-full sm:w-3/4 p-6">
    <div class="p-6 mb-6">
      <h4 class="text-xl font-semibold mb-2">Welcome Celestino</h4>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-6">
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl" name="person"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold">Estudantes</h4>
            <p></p>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl" name="person"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold">Cursos</h4>
            <p></p>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl" name="person"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold">Professores</h4>
            <p></p>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4 text-center flex items-center justify-center gap-4">
        <div class="bg-indigo-200 p-4 rounded-full">
            <ion-icon class="text-4xl"  name="apps"></ion-icon>
        </div>
        <div>
            <h4 class="text-lg font-semibold">Disciplinas</h4>
            <p></p>
        </div>
      </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-6">
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h1 class="font-bold">Top 5 Estudantes</h1>
            <div class="flex items-center justify-between border-b mt-4 py-2">
                <h4 class="font-bold"></h4>
                <p class="font-medium"></p>
            </div>
        </div>

        <div class="shadow-lg rounded-lg p-8">
            <h1 class="font-bold mb-2"></h1>
            <div class="">
                <div class="loader"></div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-lg rounded-lg">
        <div class="container mx-auto p-4">
          <div class="overflow-x-auto">
            <div class="sm:flex items-center justify-between mb-4">
              <h1 class="font-bold text-3xl">Estudantes</h1>
            </div>
            <table class="min-w-full bg-white ">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-b">Nome</th>
                  <th class="px-4 py-2 border-b">Email</th>
                  <th class="px-4 py-2 border-b">Endereco</th>
                  <th class="px-4 py-2 border-b">Diciplina</th>
                  <th class="px-4 py-2 border-b">Resultado Final</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td class="px-4 py-2 border-b">Celestino Trosso</td>
                  <td class="px-4 py-2 border-b">trcelestino@gmail.com</td>
                  <td class="px-4 py-2 border-b">Benguela, vila das acacias</td>
                  <td class="px-4 py-2 border-b">Informatica</td>
                  <td class="px-4 py-2 border-b">Aprovado</td>
                </tr>
              </tbody>
            </table>
                <h1></h1>
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