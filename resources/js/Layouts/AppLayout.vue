<template>
    <div class="flex-root">
        <div class="page">
            <AppSidebar :collapsed="collapsed" :is-mobile-open="isMobileOpen" @update:is-mobile-open="val => isMobileOpen = val" />

            <div class="wrapper">
                <AppNavbar
                    @toggleCollapse="collapsed = !collapsed"
                    @toggleMobile="isMobileOpen = !isMobileOpen"
                />

                <div class="content" id="app_content">
                    <slot />
                </div>

                <AppFooter />
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import AppSidebar from '@/Components/Layout/AppSidebar.vue'
import AppNavbar from '@/Components/Layout/AppNavbar.vue'
import AppFooter from '@/Components/Layout/AppFooter.vue'

const collapsed = ref(false)
const isMobileOpen = ref(false)
</script>
