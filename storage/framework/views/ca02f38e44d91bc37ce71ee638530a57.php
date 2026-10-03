<!-- website-chat:start -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/website-chat.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/website-chat.css'))); ?>">
<div id="website-chat" data-endpoint="<?php echo e(route('chat.answer')); ?>" data-token="<?php echo e(csrf_token()); ?>" data-timeout="<?php echo e(config('chat.provider') === 'ollama' ? (config('chat.ollama_timeout') + 15) * 1000 : 40000); ?>">
    <section id="website-chat-panel" class="website-chat-panel" aria-label="Ageless website assistant" hidden>
        <header class="website-chat-header">
            <div><strong>Ageless Assistant</strong><span>Your guide to our world of fun</span></div>
            <button type="button" class="website-chat-close" aria-label="Close chat">&times;</button>
        </header>
        <div class="website-chat-messages" role="log" aria-live="polite" aria-relevant="additions" aria-label="Chat messages" tabindex="0">
            <div class="website-chat-message">Hi there! Ask me about our products, projects, services or how to get in touch. I’ll find information from our website.</div>
        </div>
        <div class="website-chat-suggestions" aria-label="Suggested questions">
            <button type="button">Products</button><button type="button">Projects</button><button type="button">Contact</button>
        </div>
        <p class="website-chat-status" role="status"></p>
        <form class="website-chat-form">
            <label for="website-chat-input" class="website-chat-sr">Your question</label>
            <input id="website-chat-input" type="text" maxlength="500" placeholder="Ask about Ageless…" autocomplete="off" required>
            <button type="submit" aria-label="Send message">&#10148;</button>
        </form>
        <p class="website-chat-note">Answers from our website · No live agent</p>
    </section>
    <button type="button" class="website-chat-toggle" aria-controls="website-chat-panel" aria-expanded="false" aria-label="Open Ageless chat">
        <span>lets chat</span>
    </button>
</div>
<script src="<?php echo e(asset('assets/js/website-chat.js')); ?>?v=<?php echo e(filemtime(public_path('assets/js/website-chat.js'))); ?>" defer></script>
<!-- website-chat:end -->
<?php /**PATH C:\xampp\htdocs\ageless_laravel_local\resources\views/partials/website-chat.blade.php ENDPATH**/ ?>