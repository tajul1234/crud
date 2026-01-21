<form class="max-w-sm mx-auto space-y-4" wire:submit.prevent="UpdateDataa">
    <div>
        <label for="title" class="block mb-2.5 text-sm font-medium text-heading">Small Input</label>
        <input type="text" id="title" wire:model="title" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-2.5 py-2 shadow-xs placeholder:text-body" placeholder="" />
        @error('title')
            <p class="text-red-500">{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="body" class="block mb-2.5 text-sm font-medium text-heading">Base Input</label>
        <input type="text" id="body" wire:model="body" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="" />
        @error('body')
            <p class="text-red-500">{{$message}}</p>
        @enderror
    </div>
    <div>
        <button class="bg-green-500 p-4 rounded-xl" >Update</button>
        <button type="button" class="bg-red-500 p-4 rounded-xl" wire:click="cancel">Cancel</button>
    </div>
</form>
