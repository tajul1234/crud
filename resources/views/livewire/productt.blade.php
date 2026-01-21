

<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Color
                </th>

                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if($products->count()>0)

              @foreach ( $products as $product)


            <tr class="bg-neutral-primary-soft">
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                   {{ $product->title }}
                </th>
                <td class="px-6 py-4">
                    {{ $product->body }}
                </td>

                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                </td>
            </tr>

            @endforeach
            @else
            <tr>
                <td>No pRoduct</td>
            </tr>


            @endif

        </tbody>
    </table>
</div>
