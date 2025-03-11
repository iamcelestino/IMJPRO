<?php $this->view('partials/header') ?>

<nav class="bg-blue-800 text-white p-4 block sm:hidden">
  <div class="flex items-center justify-between">
    <div class="flex items-center">
        <ion-icon class="text-3xl" name="pie-chart"></ion-icon>
        <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">CONOTA</a></h1>
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
        <h1 class="text-3xl font-bold" ><a href="<?= BASE_URL ?>">CONOTA</a></h1>
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
    <div class="bg-white shadow-lg rounded-lg">
        <div class="container mx-auto p-4">
          <div class="overflow-x-auto">
            <form  method="POST">
                <div class="">
                    <label class="block mb-4 font-bold" for="">Nome do curso</label>
                    <input value="<?=buscar_var('nome_curso', $curso->nome_curso)?>" class="p-[0.7rem] border-2 border-gray-300 w-full" type="text" name="nome_curso" placeholder="Nome do curso">
                </div>
                <div>
                    <label class="block my-4 font-bold" for="descricao">Descricao</label>
                    <textarea class="w-full border-2 border-gray-300" name="descricao" id="descricao"><?=buscar_var('descricao', $curso->descricao)?></textarea>
                </div>
                <div>
                   <select class="w-full border-2 border-gray-300 p-[0.7rem]" name="id_coordenador">
                    <option value="">Selciona o coordenador do curso</option>
                    <option value="1">Daniel Francisco</option>
                   </select>
                </div>
                <button type="submit" class="bg-blue-800 text-orange-400 py-2 px-4 font-bold">Apagar Curso</button>
            </form>
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