<div>
    @foreach($posts as $post)
        <div class="py-4 px-4 my-4 bg-white shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold"> {{ $post->user->name }}</span>
                <span class="text-cool-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                <button wire:click="showUpdateForm({{ $post->id }})" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">Edit</button>
                <button wire:click="delete({{ $post->id }})" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Hapus</button>
            </div>
            <div>
                @if ($updateId !== $post->id)
                    <span> {{ $post->body }}</span>
                @endif

                @if ($updateId === $post->id)
                    <textarea wire:model="body" class="mt-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="3" placeholder="Ketikan sesuatu ..."></textarea>
                    <button wire:click="update({{ $post->id }})" class="px-4 py-2 bg-blue-600 text-white font-bold hover:bg-blue-400 rounded-md">Update</button>
                @endif
                
            </div>
        </div>
    @endforeach
</div>
