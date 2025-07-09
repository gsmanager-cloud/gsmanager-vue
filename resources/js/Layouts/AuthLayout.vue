<template>
    <div class="auth-wrapper d-flex justify-content-center align-items-center">
        <div class="auth-container">
            <slot />
        </div>
    </div>
</template>

<script setup></script>

<style scoped>
.auth-wrapper {
    min-height: 100vh;
    background-color: #f8f9fa;
    padding: 1rem;
}

.auth-container {
    width: 100%;
    max-width: 420px;
    background: #fff;
    border-radius: 0.5rem;
    padding: 2rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,.05);
}
</style>
