<nav class="bg-blue-darker py-4">
    <div class="container flex justify-between items-center text-blue-lightest">
        <div>
            <h1 class="font-normal text-2xl">
                <a href="/" class="text-blue-lightest flex items-center pl-6">
                    @include ('svgs.logo', ['class' => 'mr-2'])
                    {{ config('app.name', 'Council') }}
                </a>
            </h1>
        </div>

        <div>
            <div>Search</div>
        </div>
    </div>
</nav>