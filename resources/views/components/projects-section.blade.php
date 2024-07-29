@foreach ($projects as $project)
    <div class="card mb-4 shadow-sm rounded-0">
        <div class="card-body d-flex align-items-center p-3">
            <div class="row">
                <div class="col-md-3">
                    <img src="/storage/{{ $project->image }}" class="img-fluid" alt="Projeto {{ $post->title }}">
                </div>
                <div class="col-md-9">
                    <a href="{{ route('project', $project) }}">
                        <h4 class="card-title pt-md-0 pt-3">{{ $project->title }}</h4>
                    </a>
                    <span class="text-muted">{{ $project->published_at->diffForHumans() }}</span>
                    <p class="card-text mt-2">{{ strip_tags(substr($project->description, 0, 300)) }}</p>
                    @if (!empty($project->url))
                        <a href="{{ $project->url }}" class="ms-auto" target="_blank">Acessar Projeto</a>
                    @else
                        <a href="{{ route('project', $project) }}" class="ms-auto">Acessar Projeto</a>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endforeach
