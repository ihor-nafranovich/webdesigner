{{-- Секция "Проекты" - портфолио работ --}}
<section id="projects" class="projects">
    <div class="container">
        <h2 class="section-title">Мои проекты</h2>
        <div class="projects-grid">
            @forelse($projects as $project)
                <div class="project-card">
                    <div class="project-image">
                        @if($project->image)
                            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="project-img">
                        @else
                            <div class="image-placeholder project-placeholder">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                        @endif
                    </div>
                    <div class="project-content">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ $project->description }}</p>
                        <div class="project-tech">
                            @if($project->technologies)
                                @foreach($project->technologies as $tech)
                                    <span>{{ $tech }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="project-links">
                            @if($project->demo_url)
                                <a href="{{ $project->demo_url }}" class="project-link" target="_blank">
                                    <i class="fas fa-external-link-alt"></i>
                                    Демо
                                </a>
                            @endif
                            @if($project->github_url)
                                <a href="{{ $project->github_url }}" class="project-link" target="_blank">
                                    <i class="fab fa-github"></i>
                                    Код
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="no-projects">
                    <i class="fas fa-folder-open"></i>
                    <h3>Проекты в разработке</h3>
                    <p>Скоро здесь появятся новые работы!</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
