import ServerIcon from '~icons/heroicons-outline/server'
import CogIcon from '~icons/heroicons-outline/cog'
import HomeIcon from '~icons/heroicons-outline/home'

export default [
    {
        label: 'Dashboard',
        icon: HomeIcon,
        href: '/dashboard',
    },
    {
        label: 'Сервисы',
        icon: ServerIcon,
        children: [
            { label: 'Мои сервера', href: '/services' },
            { label: 'Создать', href: '/services/create' },
        ],
    },
    {
        label: 'Настройки',
        icon: CogIcon,
        href: '/settings',
    },
]
