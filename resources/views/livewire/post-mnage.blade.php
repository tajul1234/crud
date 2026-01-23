<div>
  @if($showfrom)
    @include('livewire.createPost')

  @endif
  @if(session('success'))
  <p class="text-green-500">{{session('success')}}</p>
  @endif
   @if($shoreditform)
   @include('livewire.editPost')
   @endif
    <button class="p-4 bg-green-500 rounded-lg" wire:click="createdata">Create</button>
    <label for="search">Search</label>
    <input type="text" wire:model.live="search" class="p-5 border border-green-500 rounded-lg">
<div class="relative overflow-x-auto mt-4 bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                   Title
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Body
                </th>

                <th scope="col" class="px-6 py-3 font-medium">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($posts->count()>0)
             @foreach ($posts as $post)
              <tr class="bg-neutral-primary-soft hover:bg-neutral-secondary-medium">
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    {{ $post->title }}
                </th>

                <td class="px-6 py-4">
                  {{ $post->body }}
                </td>
                <td class="px-6 py-4 text-right">
                    <button wire:click="edit({{$post->id}})" class="font-medium text-fg-brand hover:underline">Edit</button>
                  <button wire:click="delete({{$post->id}})" wire:confirm="Are you sure to delete?" class="font-medium text-fg-brand hover:underline bg-red-500">Delete</button>

                </td>
            </tr>

            @endforeach
            @else<tr>
                <td>No Post</td>

            </tr>

            @endif


        </tbody>
    </table>
    <div class="mt-6">
        {{ $posts->links() }}

    </div>
<div>


</div>
</div>

</div>
