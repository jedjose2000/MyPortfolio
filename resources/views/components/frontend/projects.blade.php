@props(['skills','projects'])
<div class="container mx-auto" x-data="{ selectedTab: '{{ empty($selectedTab) ? 'all' : $selectedTab }}' }">
    <nav class="relative w-full overflow-x-auto mb-12 border-b-2 border-light-tail-100 dark:text-dark-tail-100 scrollbar scrollbar-thumb-gray-500 scrollbar-thin scrollbar-track-sky-300 scrollbar-thumb-rounded-full scrollbar-track-rounded-full">
        <ul class="inline-flex">
            <li class="cursor-pointer capitalize m-4">
                <button @click="selectedTab = 'all'" class="w-32 text-center px-5 py-2 bg-blue-500 dark:bg-dark-tail-100 hover:bg-accent text-white rounded-md transition" :class="selectedTab === 'all' ? 'bg-dark-tail-100' : ''">
                    All
                </button>
            </li>
            @foreach($skills as $projectSkill)
                <li class="cursor-pointer capitalize m-4" x-data="{projectSkill: {{json_encode($projectSkill)}} }">
                    <button @click="selectedTab = projectSkill.id" class="w-32 text-center px-5 py-2 bg-blue-500 dark:bg-dark-tail-100 hover:bg-accent text-white rounded-md transition" :class="selectedTab === projectSkill.id ? 'bg-dark-tail-100' : ''">
                        {{$projectSkill->name}}
                    </button>
                </li>
            @endforeach
        </ul>
    </nav>
    <section class="grid gap-y-12 md:grid-cols-2 md:gap-4 lg:grid-cols-3 lg:gap-8">
        @foreach($projects as $project)
            <x-frontend.project :project="$project" />
        @endforeach
    </section>
</div>

