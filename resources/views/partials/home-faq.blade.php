<section class="home-faq" id="home-faq" aria-labelledby="home-faq-heading">
    <div class="container">
        <div class="home-faq-inner">
            <header class="home-faq-header">
                <h2 id="home-faq-heading">Frequently asked questions</h2>
                <p>A few helpful answers before you start your next project.</p>
            </header>
            <div class="home-faq-list">
                @forelse($faqs as $faq)
                    <details>
                        <summary>{{ $faq->question }}</summary>
                        <p>{{ $faq->answer }}</p>
                    </details>
                @empty
                    <p>No FAQs available.</p>
                @endforelse
            </div>
            <p class="home-faq-contact">Have another question? <a href="{{ url('/contact') }}">Talk to our team <span aria-hidden="true">&rarr;</span></a></p>
        </div>
    </div>
</section>
