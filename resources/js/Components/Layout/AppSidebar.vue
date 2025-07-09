<template>
    <div :class="['sidebar', { open: isMobileOpen, collapsed }]">
        <div class="sidebar-logo">
            <AppLogo />
        </div>

        <div class="sidebar-menu mt-5">
            <ul class="nav flex-column gap-1">
                <template v-for="(item, index) in menu" :key="index">
                    <li v-if="!item.children" class="nav-item">
                        <Link class="nav-link" :href="item.href" :class="{ active: isActive(item.href) }">
                            <component :is="item.icon" class="me-2" />
                            <span v-if="!collapsed">{{ item.label }}</span>
                        </Link>
                    </li>

                    <li v-else class="nav-item">
                        <button class="nav-link d-flex justify-content-between align-items-center w-100"
                                @click="toggle(index)"
                                :class="{ active: isAnyChildActive(item.children) }">
                            <div class="d-flex align-items-center">
                                <component :is="item.icon" class="me-2" />
                                <span v-if="!collapsed">{{ item.label }}</span>
                            </div>
                            <svg v-if="!collapsed" width="16" height="16" fill="currentColor">
                                <path :d="open[index] ? upChevron : downChevron" />
                            </svg>
                        </button>

                        <ul :class="['nav flex-column ms-4', { open: open[index] }]" v-if="!collapsed">
                            <li v-for="(child, cIdx) in item.children" :key="cIdx">
                                <Link class="nav-link small" :href="child.href" :class="{ active: isActive(child.href) }">
                                    {{ child.label }}
                                </Link>
                            </li>
                        </ul>
                    </li>
                </template>
            </ul>
        </div>
    </div>

    <!-- backdrop -->
    <div v-if="isMobileOpen" class="sidebar-backdrop" @click="isMobileOpen = false"></div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'
import AppLogo from './AppLogo.vue'
import menu from '@/menus/sidebar.js'

const page = usePage()
const open = ref({})
const STORAGE_KEY = 'sidebar_open'
const collapsed = ref(false)
const isMobileOpen = ref(false)

const downChevron = 'M1.5 8l6 6 6-6'
const upChevron = 'M1.5 14l6-6 6 6'

function isActive(href) {
    return page.url.startsWith(href)
}

function isAnyChildActive(children) {
    return children.some(child => isActive(child.href))
}

function toggle(index) {
    open.value[index] = !open.value[index]
    localStorage.setItem(STORAGE_KEY, JSON.stringify(open.value))
}

onMounted(() => {
    const stored = localStorage.getItem(STORAGE_KEY)
    if (stored) open.value = JSON.parse(stored)

    menu.forEach((item, index) => {
        if (item.children && isAnyChildActive(item.children)) {
            open.value[index] = true
        }
    })
})
</script>
