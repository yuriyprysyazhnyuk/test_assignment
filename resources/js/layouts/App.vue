<template>
    <router-view v-slot="{ Component, route }">
        <div :key="route.name" class="container-fluid bg-black">
            <Component :is="Component"/>
        </div>
    </router-view>
</template>
