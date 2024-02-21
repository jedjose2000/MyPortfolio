@props(['project'])
<div :class="selectedTab === 'all' || selectedTab === skill.id ? 'block' : 'hidden'"  x-data="{skill: {{json_encode($project->skill)}} }"  class="mx-auto w-full max-w-[26rem] rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg  group ease-in duration-300 group-hover:scale-105" >
    <div class="mx-4 mt-4 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40  ease-in duration-700 group-hover:scale-105">
        <img class="mx-auto lg:h-56 object-cover max-h-48 object-center  ease-in duration-700 group-hover:scale-75"
             src="{{asset('/storage/'. $project->image)}}"
             alt="ui/ux review check"
        />
        <div class="border-solid border-2 border-sky-400 rounded-xl bg-dark-primary ">
            <p class="text-white p-1 ml-2 group-hover:text-blue-400">{{$project->skill->name}}</p>
        </div>
    </div>
    <div class="p-6">
        <div class="mb-3 flex items-center justify-between">
            <h5 class="block font-sans text-xl font-medium leading-snug tracking-normal text-blue-gray-900 antialiased">
                {{$project->name}}
            </h5>
        </div>
        <div class="max-h-50">
            <p class="block font-sans text-base font-light leading-relaxed text-gray-700 antialiased whitespace-nowrap overflow-hidden overflow-ellipsis w-40">
                {{$project->projectDescription}}
            </p>
        </div>
        <div class="group mt-8 inline-flex flex-wrap items-center gap-3">
            <img src="{{asset('/storage/'. $project->image)}}" alt="Skill Image" class="h-10">
        </div>
    </div>
    <div class="p-6 pt-3">
        <a href="{{$project->projectUrl}}" target="_blank">
            <button
                class="block w-full select-none rounded-lg bg-blue-500 py-3.5 px-7 my-5 text-center align-middle font-sans text-sm font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button"
                data-ripple-light="true"
            >
                Github
            </button>
        </a>
        <a href="">
            <button
                class="block w-full select-none rounded-lg bg-pink-500 py-3.5 px-7 text-center align-middle font-sans text-sm font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button"
                data-ripple-light="true"
            >
                Link
            </button>
        </a>
    </div>
</div>




