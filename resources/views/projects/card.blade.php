<div class="portfolio-project-card project-portfolio-item" data-category="{{ $project->category_key }}">
    <a href="{{ route('projects.show', $project->slug) }}" class="project-card-thumb-wrap{{ $project->slug === 'dtpc-ernakulam-marine-drive' ? ' is-logo' : '' }}" aria-label="Read more about {{ $project->title }}">
        <span class="project-photo-track">
            @foreach($project->gallery_images as $photo)
                <img src="{{ $photo }}" alt="{{ $project->title }} ? photo {{ $loop->iteration }}" draggable="false">
            @endforeach
        </span>
        <span class="project-photo-dots" aria-hidden="true">@foreach($project->gallery_images as $photo)<span @if($loop->first) class="is-active" @endif></span>@endforeach</span>
        <span class="project-category-pill">{{ $project->category ?: (["theme" => "Theme & Amusement Parks", "adventure" => "Adventure & Aerial Parks", "cinema" => "Immersive Cinema & Domes", "indoor" => "Indoor FEC & Edutainment"][$project->category_key] ?? "Entertainment Projects") }}</span>
    </a>
    <div class="project-card-body">
        <h3 class="project-card-title">{{ $project->title }}</h3>
        <p class="project-card-summary">{{ $project->short_description }}</p>
        <div class="project-card-actions">
            <button type="button" class="project-card-quote open-project-spec-modal-btn" data-project-title="{{ $project->title }}">
                <i class="las la-file-alt" aria-hidden="true"></i> <span>Get Quote</span>
            </button>
            <a href="{{ route('projects.show', $project->slug) }}" class="project-card-read-more">
                <span>Read more</span> <i class="las la-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>
