<template>
    <footer class="footer">
        © {{ new Date().getFullYear() }} {{ appName }} — All rights reserved
    </footer>
</template>

<script setup>
const appName = import.meta.env.VITE_APP_NAME ?? 'GSManager'
</script>
