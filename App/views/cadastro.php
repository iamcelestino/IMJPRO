<?php $this->view('partials/header') ?>
    <main>
        <section class="">
            <div class="">
                <div class="flex h-screen bg-blue-800">
                    <div class="hidden lg:flex lg:w-1/2 bg-cover bg-blend-multiply bg-red-400" style="background-image: url('./public/assets/images/244835289_133254449042198_8478864432922741442_n.jpg');">
                    </div>
                    <div class="w-full max-w-md mx-auto p-8 md:py-12 lg:w-1/2 self-center">
                        <form action="" method="POST">
                            <div class="">
                                <div>
                                    <label class="block mb-2 text-white" for="">Nome Completo</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="text" placeholder="Nome Completo" name="nome_usuario">
                                </div>
                                <div>
                                    <label class="block my-2 text-white" for="">Data de Nascimeto</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="date" placeholder="Data de Nascimento" name="data_nascimento">
                                </div>
                                <div class="mt-4">
                                    <select name="tipo_usuario" id="tipo_usuario" class="w-full p-[0.7rem] rounded-md">
                                        <option value="">Escola a sua funcão</option>
                                        <option value="Professor">Professor</option>
                                        <option value="Aluno">Aluno</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block my-2 text-white" for="">Email</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="email" placeholder="emil" name="email">
                                </div>
                                <div>
                                    <label class="block my-2 text-white" for="">Plavra-passe</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="password" placeholder="palavra_passe" name="palavra_passe">
                                </div>
                            </div>
                            <p class="text-white mt-4 text-center">Ja tens uma conta, faca login <a class="inline-block text-red-400" href="<?=BASE_URL ?>login">Login</a></p>
                            <button type="submit" class="bg-red-500 p-[0.7rem] w-full text-white font-medium rounded-md mt-4">Cadastrar-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>