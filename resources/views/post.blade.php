<x-app-layout :title="$post->title">
    <!-- Project Section -->
    <section class="section" style="min-height: 75vh; padding: 140px 0 0 0;">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $post->title }}</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            {!! $post->description !!}
        </div>
    </section><!-- /Project Section -->
</x-app-layout>
