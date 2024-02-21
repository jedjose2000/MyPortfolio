<section id="contact" class="section bg-light-secondary dark:bg-dark-secondary">
    <div class="container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-title">
                Contact Me
            </h2>
            <p class="subtitle">
                Have a question? Just kindly send me a message and I'll do my best to get back at you.
            </p>
        </div>
        <div class="flex flex-col md:flex-row md:gap-x-8">
            <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2">
                <div class="flex flex-col lg:flex-row gap-x-4">
                    <div class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-body text-xl mb-1">
                            Have a question? Just kindly send me a message and I'll do my best to get back at you.
                        </h4>
                        <p class="text-accent font-normal">
                            You can email me at jedjose2000@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <form class="space-y-8 w-full max-w-md" x-data="form" @submit.prevent="submitForm">
                <div x-show="showMessage" class="p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <div class="max-w-7xl mx-auto">Email Sent</div>
                </div>
                @csrf
                <div class="flex gap-8">
                    <div>
                        <input type="text" class="input" name="name" placeholder="Your Name" x-model="form.name"/>
                        <template x-if="errors.name">
                            <span x-show="errors.name" x-text="errors.name[0]" class="text-sm text-red-400"></span>
                        </template>
                    </div>
                    <div>
                        <input type="email" class="input" name="email" placeholder="Your Email" x-model="form.email"/>
                        <template x-if="errors.email">
                            <span x-show="errors.email" x-text="errors.email[0]" class="text-sm text-red-400"></span>
                        </template>
                    </div>
                </div>
                <textarea class="textarea" placeholder="Your message" spellcheck="false" name="body" x-model="form.body">
                </textarea>
                <template x-if="errors.body">
                    <span x-show="errors.email" x-text="errors.email[0]" class="text-sm text-red-400"></span>
                </template>

                <button type="submit" class="btn btn-lg bg-accent hover:bg-blue-500 dark:bg-dark-secondary text-black dark:text-white">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
