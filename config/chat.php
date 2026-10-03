<?php

return [
    'provider' => env('CHAT_PROVIDER', 'huggingface'),
    'ollama_url' => env('OLLAMA_URL', 'http://127.0.0.1:11434'),
    'ollama_model' => env('OLLAMA_MODEL', 'hf.co/braydenh563/Qwen3.6-35B-Uncensored-HauhauCS-1M-MTP-Ollama:Q4_K_M'),
    'ollama_timeout' => max(5, min(300, (int) env('OLLAMA_TIMEOUT', 120))),
    'huggingface_token' => env('HF_TOKEN', ''),
    'huggingface_model' => env('HF_MODEL', 'openai/gpt-oss-120b:cheapest'),
];
