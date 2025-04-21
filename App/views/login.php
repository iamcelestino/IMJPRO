<?php $this->view('partials/header') ?>
    <main>
        <section class="">
            <div class="">
                <div class="flex h-screen">
                    <div class="hidden lg:flex lg:w-1/2 bg-cover bg-blend-multiply" style="background-image: url('./public/assets/images/pexels-ivan-samkov-7621136.jpg');">
                    </div>
                    <div class="w-full max-w-md mx-auto p-8 md:py-12 lg:w-1/2 self-center bg-blue-800 rounded-md">
                        <div class="mb-5">
                            <h1 class="text-3xl mb-4 text-white">BEM VINDO<br></h1>
                        </div>
                        <form method="POST">
                            <div class="">
                                <div>
                                    <label class="block mb-2 text-white" for="">Email</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="email" placeholder="Email" name="email">
                                </div>
                                <div>
                                    <label class="block my-2 text-white" for="">Palavra Passe</label>
                                    <input class="w-full p-[0.7rem] rounded-md" type="password" placeholder="Palavra passe" name="palavra_passe">
                                </div>
                            </div>
                            <p class="mt-4 text-center text-white">Ainda nao possui uma conta? <a class="text-red-400 inline-block" href="<?= BASE_URL?>cadastro">Crie Agora</a></p>
                            <button type="submit" class="bg-red-500 p-[0.7rem] w-full text-white font-medium rounded-md mt-4">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>