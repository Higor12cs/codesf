<x-app-layout title="Projetos">
    <!-- News Section -->
    <section id="projetos" class="section" style="min-height: 75vh; padding: 140px 0 0 0;">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Projetos</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            @foreach ($projects as $project)
                <div class="card mb-4 shadow-sm rounded-0">
                    <div class="card-body d-flex align-items-center p-3">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/storage/{{ $project->image }}" class="img-fluid"
                                    alt="Notícia {{ $project->title }}">
                            </div>
                            <div class="col-md-9">
                                <a href="{{ route('project', $project) }}">
                                    <h4 class="card-title pt-md-0 pt-3">{{ $project->title }}</h4>
                                </a>
                                <span class="text-muted">{{ $project->published_at->diffForHumans() }}</span>
                                <p class="card-text mt-2">{{ strip_tags(substr($project->description, 0, 300)) }}
                                </p>
                                <a href="{{ route('project', $project) }}" class="ms-auto">Acessar Projeto</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-center">
                {{ $projects->links() }}
            </div>
        </div>
    </section><!-- /News Section -->
</x-app-layout>
