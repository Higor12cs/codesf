<x-app-layout title="Notícias">
    <!-- News Section -->
    <section id="noticias" class="section" style="min-height: 75vh; padding: 140px 0 0 0;">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Notícias</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            @foreach ($posts as $post)
                <div class="card mb-4 shadow-sm rounded-0">
                    <div class="card-body d-flex align-items-center p-3">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/storage/{{ $post->image }}" class="img-fluid"
                                    alt="Notícia {{ $loop->index }}">
                            </div>
                            <div class="col-md-9">
                                <h4 class="card-title pt-md-0 pt-3">{{ $post->title }}</h4>
                                <span class="text-muted">{{ $post->published_at->diffForHumans() }}</span>
                                <p class="card-text mt-2">{{ strip_tags(substr($post->description, 0, 300)) }}
                                </p>
                                @if (!empty($post->url))
                                    <a href="{{ $post->url }}" class="ms-auto" target="_blank">Acessar Notícia</a>
                                @else
                                    <a href="{{ route('post', $post) }}" class="ms-auto">Acessar Notícia</a>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </section><!-- /News Section -->
</x-app-layout>
