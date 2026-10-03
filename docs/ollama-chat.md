# Ollama chatbot setup

The "lets chat" widget sends questions to Laravel. Laravel searches public website content and calls Ollama's `/api/chat` endpoint to write a reply from that evidence. Source links stay server-selected. Questions are independent; conversation history is not sent.

1. Install Ollama from https://ollama.com/download/windows on the computer running Laravel, and start Ollama.
2. Download and run the model (underscores have no backslashes):

   ```powershell
   ollama run hf.co/braydenh563/Qwen3.6-35B-Uncensored-HauhauCS-1M-MTP-Ollama:Q4_K_M
   ```

3. Configure `.env`:

   ```dotenv
   CHAT_PROVIDER=ollama
   OLLAMA_URL=http://127.0.0.1:11434
   OLLAMA_MODEL=hf.co/braydenh563/Qwen3.6-35B-Uncensored-HauhauCS-1M-MTP-Ollama:Q4_K_M
   OLLAMA_TIMEOUT=120
   ```

4. Run `php artisan config:clear`, refresh the website, and ask a question in "lets chat". Model replies show the AI-generated label. If Ollama is unavailable, the model is missing, or generation times out, the widget returns its website search answer.

No Hugging Face inference token is needed for this integration. Keep Ollama running. `OLLAMA_URL` is reached from the Laravel server, not the visitor's browser; a deployed website needs access to its own Ollama server. The configured provider never silently switches to hosted inference.

The request uses an 8192-token context and a 700-token output limit rather than allocating the model's full advertised context. Timeout is configurable from 5 to 300 seconds, with the browser allowing an extra 15 seconds. When deploying behind a proxy, its request timeout must also accommodate generation. Loading and inference speed depend on available hardware.

Verify without downloading a model: `php tests/ollama_chat_smoke.php`. This uses fake HTTP responses. Also run `php tests/chat_smoke.php` and `php tests/huggingface_chat_smoke.php` for regression coverage. For live diagnosis, check `http://127.0.0.1:11434/api/tags` and sanitized Ollama warnings in `storage/logs/laravel.log`.

API reference: https://docs.ollama.com/api/chat
