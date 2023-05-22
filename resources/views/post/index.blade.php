@php
    /** @var $posts \Illuminate\Pagination\LengthAwarePaginator   */
@endphp

<x-app-layout :meta-title="'Fayusa Blog - ' . $category->title" meta-description="By Category description">
  <section class="w-full md:w-2/3 flex flex-col items-center px-3">

    @foreach ($posts as $post)
        <x-post-item :post="$post"></x-post-item>
    @endforeach

    <!-- Pagination -->
    {{ $posts->onEachSide(1)->links() }}

</section>
<x-sidebar/>
</x-app-layout>
