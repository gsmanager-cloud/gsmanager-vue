<template>
    <nav class="navbar navbar-expand px-3 border-bottom bg-white">
        <div class="container-fluid justify-content-between align-items-center">
            <h1 class="h5 m-0 fw-bold">{{ pageTitle }}</h1>

            <div>
                <div class="dropdown d-inline" v-if="isAuthenticated">
                    <button
                        class="btn btn-light btn-sm d-flex align-items-center rounded-pill px-2 py-1"
                        type="button"
                        id="dropdownUserMenu"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <div
                            class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2"
                            style="width: 30px; height: 30px;"
                        >
                            {{ userInitial }}
                        </div>
                        <span class="d-none d-md-inline small fw-medium text-muted me-1">{{ user.name }}</span>
                        <i class="fas fa-chevron-down small text-muted"></i>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-2" aria-labelledby="dropdownUserMenu">
                        <li>
                            <h6 class="dropdown-header">{{ user.name }}</h6>
                        </li>
                        <li>
                            <Link class="dropdown-item" href="/profile">
                                <i class="fas fa-user me-2 text-secondary"></i> Профиль
                            </Link>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <button
                                class="dropdown-item"
                                @click="logout"
                            >
                                <i class="fas fa-sign-out-alt me-2 text-danger"></i> Выйти
                            </button>
                        </li>
                    </ul>
                </div>

                <button
                    v-else
                    class="btn btn-outline-primary btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#authModal"
                >
                    Войти
                </button>
            </div>
        </div>

        <!-- Подключаем модалку для входа -->
        <AuthModal />
    </nav>
</template>

<script setup>
import { computed, ref, onMounted } from 'vue'
import {usePage, Link, router} from '@inertiajs/vue3'
import AuthModal from '@/Pages/Auth/AuthModal.vue'
import {route} from "ziggy-js";

const page = usePage()
const user = computed(() => page.props.auth.user ?? null)
const pageTitle = computed(() => page.props.title ?? 'GSManager')

const isAuthenticated = computed(() => !!user.value)
const userInitial = computed(() => user.value?.name ? user.value.name.charAt(0).toUpperCase() : '?')

function logout() {
    if (confirm('Вы уверены, что хотите выйти?')) {
        router.post(route('logout'))
    }
}

onMounted(() => {
    const trigger = document.getElementById('dropdownUserMenu')
    if (trigger) {
        new bootstrap.Dropdown(trigger)
    }
})
</script>

<style scoped>

</style>
