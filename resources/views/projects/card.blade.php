<div class="portfolio-project-card project-portfolio-item" data-category="{{ $project->category_key }}" data-aos="zoom-in-down">
    <a href="{{ route('projects.show', $project->slug) }}" class="project-card-thumb-wrap">
        <img src="{{ $project->image_url }}" alt="{{ $project->title }}">
        <span class="project-category-pill">{{ $project->category }}</span>
        <div class="project-action-circle"><i class="las la-arrow-right"></i></div>
    </a>
    <div class="project-card-body">
        <div class="project-meta-strip">
            @if($project->location)<span><i class="las la-map-marker-alt"></i> {{ $project->location }}</span>@endif
            @if($project->year)<span>{{ $project->year }}</span>@endif
            @if($project->capacity)<span><i class="las la-tachometer-alt"></i> {{ $project->capacity }}</span>@endif
        </div>
        <h3 class="project-card-title">{{ $project->title }}</h3>
        <p class="project-card-summary">{{ $project->short_description }}</p>
        <button type="button" class="btn-view-study open-case-study-btn"
                data-name="{{ $project->title }}" data-location="{{ $project->location }}" data-year="{{ $project->year }}"
                data-category="{{ $project->category }}" data-capacity="{{ $project->capacity }}"
                data-image="{{ $project->image_url }}"
                data-overview="{{ $project->description ?: $project->short_description }}"
                data-scope="{{ $project->scope }}" data-specs="{{ $project->specifications }}">
            <span>View case study</span><i class="las la-arrow-right"></i>
        </button>
    </div>
</div>
