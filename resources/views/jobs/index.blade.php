<x-layout>
    <div class="space-y-10">
        <section class="">
            <h1 class="text-center font-bold text-4xl">Let's Find Your Next Job</h1>
            <x-forms.form class="mt-6" action="/search">
                <x-forms.input :label="false"  name="q" placeholder="Web developer"/>
            </x-forms.form>    
        </section>


        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-1 mt-6">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach

            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach

            </div>
        </section>
    </div>
</x-layout>
