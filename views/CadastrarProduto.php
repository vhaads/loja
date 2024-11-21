<div class="container m-auto w-[1280px] bg-white/10 backdrop-blur-sm border border-black/30 rounded-lg shadow-lg p-6 mt-10 hidden" id="form_cadastro">
    <div class="flex gap-2 items-center justify-center">
        <img class="w-[64px] h-[64px]" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAALy0l... (imagem curta) ..." alt="database">
        <h1 class='text-white text-2xl'>Cadastrar Produtos!</h1>
    </div>
    <form action="" method="POST" class="max-w-lg mx-auto p-6 mt-4 bg-gray-200 rounded-lg shadow-lg h-[60vh]">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-4">
            <label for="nome" class="block text-sm font-semibold text-gray-700">Nome:</label>
            <input type="text" id="nome" name="nome" required class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="descricao" class="block text-sm font-semibold text-gray-700">Descrição:</label>
            <textarea id="descricao" name="descricao" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <div class="mb-4">
            <label for="preco" class="block text-sm font-semibold text-gray-700">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" required class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Novo campo de URL da foto -->
        <div class="mb-4">
            <label for="foto_url" class="block text-sm font-semibold text-gray-700">URL da Foto (opcional):</label>
            <input type="url" id="foto_url" name="foto_url" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <button type="submit" class="w-full py-3 mt-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Salvar
            </button>
        </div>
    </form>
</div>
