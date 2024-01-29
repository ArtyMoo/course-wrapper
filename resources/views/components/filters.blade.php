@props(['categories', 'authors'])

<div class="flex flex-col w-full md:flex-row">
    <x-filters-dropdown name="Categories" filter="category" :list="App\Models\Category::all()"></x-filters-dropdown>
    <x-filters-dropdown name="Authors" filter="author" :list="App\Models\Author::all()"></x-filters-dropdown>
</div>
