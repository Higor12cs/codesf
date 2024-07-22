<div class="accordion" id="accordionCamarasTecnicas">
    @foreach ($chambers as $chamber)
        <div class="accordion-item">
            <h3 class="accordion-header" id="heading{{ $chamber->id }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse{{ $chamber->id }}" aria-expanded="false"
                    aria-controls="collapse{{ $chamber->id }}">
                    <i class="bi-{{ $chamber->icon }} fs-1 me-2" style="color: #011c53;"></i>
                    <span class="accordion-header-text">
                        {{ $chamber->name }}
                    </span>
                </button>
            </h3>
            <div id="collapse{{ $chamber->id }}" class="accordion-collapse collapse"
                aria-labelledby="heading{{ $chamber->id }}" data-bs-parent="#accordionCamarasTecnicas">
                <div class="accordion-body">
                    @if ($chamber->members->count() > 0)
                        @foreach ($chamber->members as $member)
                            @if ($member->url)
                                <p><a href="{{ $member->url }}" target="_blank">{{ $member->name }}</a></p>
                            @else
                                <p>{{ $member->name }}</p>
                            @endif
                        @endforeach
                    @else
                        <p>Em formação</p>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
