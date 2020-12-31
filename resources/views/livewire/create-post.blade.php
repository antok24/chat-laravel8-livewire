<div class="py-4 px-4 bg-white shadow-xl rounded-md">
    <textarea wire:model="body" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="3" placeholder="Ketikan sesuatu ..."></textarea>
     <div class="flex justify-end mt-2">
        <button wire:click="createPost" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Simpan
        </button>
    </div>
</div>
