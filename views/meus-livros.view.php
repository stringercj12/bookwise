<h1 class="mt-6 font-bold text-lg">Meus livros</h1>

<div class="grid grid-cols-4 gap-4">
  <div class="col-span-3 gap-4 flex flex-col gap-4">
    <?php foreach ($livros as $livro) {
      require "partials/_livro.php";
    } ?>
  </div>
  <div>

    <div class="border border-stone-700 rounded">

      <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo Livro!</h1>

      <form class="p-4 space-y-4" method="POST" action="/livro-criar" enctype="multipart/form-data">

        <?php if ($validacoes = flash()->get('validacoes')): ?>

          <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">

            <ul>

              <?php foreach ($validacoes as $validacao): ?>

                <li><?= $validacao ?></li>

              <?php endforeach; ?>

            </ul>

          </div>

        <?php endif; ?>

        <div class="flex flex-col">
          <label class="text-stone-400 mb-1">Imagem</label>
          <input name="imagem" type="file" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full" />
        </div>

        <div class="flex flex-col">
          <label class="text-stone-400 mb-1">Título</label>
          <input name="titulo" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full" />
        </div>

        <div class="flex flex-col">
          <label class="text-stone-400 mb-1">Autor</label>
          <input name="autor" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full" />
        </div>

        <div class="flex flex-col">
          <label class="text-stone-400 mb-1">Descrição</label>
          <textarea name="descricao" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"></textarea>
        </div>

        <div class="flex flex-col">

          <label class="text-stone-400 mb-1">Ano de Lançamento</label>

          <select name="ano_de_lancamento" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full">
            <?php foreach (range(1800, date('Y')) as $ano): ?>
              <option value="<?= $ano ?>"><?= $ano ?></option>
            <?php endforeach; ?>
          </select>

        </div>

        <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-700">Salvar</button>

      </form>

    </div>
  </div>
</div>