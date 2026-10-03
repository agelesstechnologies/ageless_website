(() => {
    const chat = document.getElementById('website-chat');
    if (!chat || chat.dataset.ready) return;
    chat.dataset.ready = 'true';
    const panel = chat.querySelector('.website-chat-panel');
    const toggle = chat.querySelector('.website-chat-toggle');
    const input = chat.querySelector('input');
    const form = chat.querySelector('form');
    const messages = chat.querySelector('.website-chat-messages');
    const status = chat.querySelector('.website-chat-status');
    let busy = false;
    function setOpen(open) {
        panel.hidden = !open;
        toggle.setAttribute('aria-expanded', String(open));
        toggle.setAttribute('aria-label', open ? 'Close Ageless chat' : 'Open Ageless chat');
        (open ? input : toggle).focus();
    }
    toggle.addEventListener('click', () => setOpen(panel.hidden));
    chat.querySelector('.website-chat-close').addEventListener('click', () => setOpen(false));
    chat.addEventListener('keydown', event => { if (event.key === 'Escape') setOpen(false); });
    function append(text, user = false, sources = []) {
        const bubble = document.createElement('div');
        bubble.className = 'website-chat-message' + (user ? ' is-user' : '');
        bubble.textContent = text;
        sources.forEach(source => {
            const url = new URL(source.url, location.href);
            if (url.origin !== location.origin) return;
            const link = document.createElement('a');
            link.href = url.href;
            link.textContent = source.title + ' →';
            bubble.appendChild(link);
        });
        messages.appendChild(bubble);
        messages.scrollTop = messages.scrollHeight;
    }
    async function send(message) {
        if (busy || !message.trim()) return;
        busy = true;
        append(message, true);
        input.value = '';
        status.textContent = 'Finding information on our website…';
        chat.querySelectorAll('form button, .website-chat-suggestions button').forEach(button => button.disabled = true);
        const controller = new AbortController();
        const timeout = setTimeout(() => controller.abort(), Number(chat.dataset.timeout) || 40000);
        try {
            const response = await fetch(chat.dataset.endpoint, {
                method: 'POST', credentials: 'same-origin', signal: controller.signal,
                headers: { 'Content-Type': 'application/json', 'Accept': 'application/json', 'X-CSRF-TOKEN': chat.dataset.token },
                body: JSON.stringify({ message })
            });
            if (!response.ok) throw new Error(response.status === 429 ? 'Please wait a minute before sending another question.' : response.status === 419 ? 'Please refresh this page and try again.' : 'Chat is unavailable right now. Please try again shortly or visit our Contact page.');
            const result = await response.json();
            append(result.answer, false, result.sources || []);
            chat.querySelector('.website-chat-note').textContent = result.mode === 'ai'
                ? 'AI-generated from website information. Please verify important details.'
                : 'Website search answer · No live agent';
        } catch (error) {
            append(error.name === 'AbortError' ? 'That took too long. Please try again.' : error.message);
            if (!input.value) input.value = message;
        } finally {
            clearTimeout(timeout);
            busy = false;
            status.textContent = '';
            chat.querySelectorAll('form button, .website-chat-suggestions button').forEach(button => button.disabled = false);
        }
    }
    form.addEventListener('submit', event => { event.preventDefault(); send(input.value.trim()); });
    chat.querySelectorAll('.website-chat-suggestions button').forEach(button => button.addEventListener('click', () => send(button.textContent)));
})();
