<x-app-layout :title="$project->title">
    <!-- Post Section -->
    <section class="section" style="min-height: 75vh; padding: 140px 0 140px 0;">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $project->title }}</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            {!! $project->description !!}
        </div>
    </section><!-- /Post Section -->
</x-app-layout>
