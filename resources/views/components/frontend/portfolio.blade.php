@props(['skills','projects'])
<section class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-title">
                My Latest Work
            </h2>
            <p class="subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur beatae, dolore earum error, fugit harum illum laborum magni nesciunt qui quo reprehenderit temporibus velit voluptatum. Aperiam labore nulla soluta.
            </p>
        </div>
    </div>
    <x-frontend.projects :skills="$skills" :projects="$projects"/>
</section>
