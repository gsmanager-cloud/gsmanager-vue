<template>
    <Link href="/" class="d-flex align-items-center text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 24 24" class="text-primary">
            <path d="M12 2C6.48 2 2 6.4 2 12c0 2.1.73 4.03 1.94 5.55.25.32.67.45 1.05.34.38-.1.68-.41.77-.79l.4-1.74c.08-.37-.02-.76-.27-1.05a6.97 6.97 0 01-1.44-4.31C4.45 7.01 7.77 4 12 4s7.55 3.01 7.55 6.99c0 1.58-.51 3.04-1.44 4.31-.25.29-.35.68-.27 1.05l.4 1.74c.09.39.39.69.77.79.38.1.8-.02 1.05-.34A9.99 9.99 0 0022 12c0-5.6-4.48-10-10-10zm-2 7c0-.55.45-1 1-1h2c.55 0 1 .45 1 1v2c0 .55-.45 1-1 1h-2c-.55 0-1-.45-1-1V9zm-4.5 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm11 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/> 
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280 40" height="36" class="text-dark ms-2">
            <text x="0" y="28" font-family="Verdana, sans-serif" font-size="28" fill="currentColor" font-weight="bold">
                {{ appName }}
            </text>
        </svg>
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
const appName = import.meta.env.VITE_APP_NAME ?? 'GSManager'
</script>
