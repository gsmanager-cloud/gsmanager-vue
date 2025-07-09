<template>
    <div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Вкладки -->
                <ul class="nav nav-tabs nav-fill border-0 px-3 pt-3">
                    <li class="nav-item">
                        <button class="nav-link" :class="{ active: activeTab === 'login' }" @click="activeTab = 'login'">Вход</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" :class="{ active: activeTab === 'register' }" @click="activeTab = 'register'">Регистрация</button>
                    </li>
                </ul>

                <div class="modal-body">

                    <!-- Вход -->
                    <form v-if="activeTab === 'login'" @submit.prevent="submitLogin">
                        <div class="form-floating mb-3">
                            <input type="text" id="login" class="form-control" v-model="loginForm.login" placeholder="Логин или Email" :class="{ 'is-invalid': loginForm.errors.login }">
                            <label for="login">Логин или Email</label>
                            <div class="invalid-feedback">{{ loginForm.errors.login }}</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" id="password" class="form-control" v-model="loginForm.password" placeholder="Пароль" :class="{ 'is-invalid': loginForm.errors.password }">
                            <label for="password">Пароль</label>
                            <div class="invalid-feedback">{{ loginForm.errors.password }}</div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="remember" v-model="loginForm.remember">
                            <label class="form-check-label" for="remember">Запомнить меня</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100" :disabled="loginForm.processing">
                            <span v-if="loginForm.processing" class="spinner-border spinner-border-sm me-2"></span>
                            Войти
                        </button>

                        <div class="text-center text-muted my-3">или через соцсети</div>
                        <div id="social-list" class="d-flex flex-wrap justify-content-center" />
                    </form>

                    <!-- Регистрация -->
                    <form v-if="activeTab === 'register'" @submit.prevent="submitRegister">
                        <div class="form-floating mb-3">
                            <input type="text" id="name" class="form-control" v-model="form.name" placeholder="Имя" :class="{ 'is-invalid': form.errors.name }">
                            <label for="name">Имя</label>
                            <div class="invalid-feedback">{{ form.errors.name }}</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" id="lastname" class="form-control" v-model="form.lastname" placeholder="Фамилия" :class="{ 'is-invalid': form.errors.lastname }">
                            <label for="lastname">Фамилия</label>
                            <div class="invalid-feedback">{{ form.errors.lastname }}</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" id="username" class="form-control" v-model="form.username" placeholder="Логин" :class="{ 'is-invalid': form.errors.username }">
                            <label for="username">Логин</label>
                            <div class="invalid-feedback">{{ form.errors.username }}</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" id="email" class="form-control" v-model="form.email" placeholder="Email" :class="{ 'is-invalid': form.errors.email }">
                            <label for="email">Email</label>
                            <div class="invalid-feedback">{{ form.errors.email }}</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" id="password" class="form-control" v-model="form.password" placeholder="Пароль" :class="{ 'is-invalid': form.errors.password }">
                            <label for="password">Пароль</label>
                            <div class="invalid-feedback">{{ form.errors.password }}</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" id="password_confirmation" class="form-control" v-model="form.password_confirmation" placeholder="Подтверждение пароля">
                            <label for="password_confirmation">Подтверждение пароля</label>
                        </div>

                        <button type="submit" class="btn btn-success w-100" :disabled="form.processing">
                            <span v-if="form.processing" class="spinner-border spinner-border-sm me-2"></span>
                            Зарегистрироваться
                        </button>

                        <div class="text-center text-muted my-3">или через соцсети</div>
                        <div id="social-list" class="d-flex flex-wrap justify-content-center" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, watch, nextTick } from 'vue'
import { useForm } from '@inertiajs/vue3'
import {route} from "ziggy-js";

const activeTab = ref(localStorage.getItem('auth-tab') || 'login')
watch(activeTab, (val) => localStorage.setItem('auth-tab', val))

// Вход
const loginForm = useForm({
    login: 'FeN1Ks',
    password: '44eHipUH2',
    remember: true,
})

const submitLogin = () => {
    loginForm.post(route('login'), {
        onSuccess: () => {
            closeModal()
            showToast('Успешный вход')
        },
    })
}

// Регистрация
const form = useForm({
    name: 'Sergey',
    lastname: 'Tyukhtin',
    username: 'FeN1Ks',
    email: 'admin@gsmanager.ru',
    password: '44eHipUH',
    password_confirmation: '44eHipUH',
})

const submitRegister = () => {
    form.post(route('register'), {
        onSuccess: () => {
            closeModal()
            showToast('Регистрация успешна')
        },
    })
}

// Закрытие модалки
function closeModal() {
    const modal = bootstrap.Modal.getInstance(document.getElementById('authModal'))
    modal?.hide()
}

// Toast
function showToast(message, type = 'success') {
    const toast = document.createElement('div')
    toast.className = `toast align-items-center text-bg-${type} border-0 show position-fixed bottom-0 end-0 m-3`
    toast.setAttribute('role', 'alert')
    toast.innerHTML = `
    <div class="d-flex">
      <div class="toast-body">${message}</div>
      <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Закрыть"></button>
    </div>`
    document.body.appendChild(toast)
    setTimeout(() => toast.remove(), 4000)
}

// Социальные кнопки
const socialRoutes = {
    vkontakte: '/auth/vk',
    yandex: '/auth/google',
    github: '/auth/github',
}

const renderSocial = () => {
    const container = document.getElementById('social-list')
    if (!container) return

    container.innerHTML = Object.entries(socialRoutes)
        .map(([provider, url]) => `
      <button type="button" class="btn btn-icon btn-sm btn-${provider} me-1 mb-1" onclick="window.location.href='${url}'" title="${provider}" data-bs-toggle="tooltip">
        <img src="/images/social/${provider}.svg" class="w-5 h-5" alt="${provider}">
      </button>
    `).join('')

    container.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
        new bootstrap.Tooltip(el)
    })
}

onMounted(() => {
    renderSocial()
    nextTick(() => {
        document.querySelector('#authModal input')?.focus()
    })
})
</script>
