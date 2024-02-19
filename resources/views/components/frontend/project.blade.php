@props(['project'])
<div :class="selectedTab == 'all' || selectedTab ==skill.id ? 'block' : 'hidden'"  x-data="{skill: {{json_encode($project->skill)}} }"  class="mx-auto w-full max-w-[26rem] rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg  group ease-in duration-300 group-hover:scale-105" >
    <div class="mx-4 mt-4 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40  ease-in duration-700 group-hover:scale-105">
        <img class="mx-auto lg:h-56 object-cover object-center  ease-in duration-700 group-hover:scale-75"
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
            <p class="flex items-center gap-1.5 font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    aria-hidden="true"
                    class="-mt-0.5 h-5 w-5 text-yellow-700"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                5.0
            </p>
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
                Check it!
            </button>
        </a>
    </div>
</div>




