<script setup>
import FooterComponent from "@/Components/Shared/FooterComponent.vue";
import HeaderComponent from "@/Components/Shared/HeaderComponent.vue";
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <HeaderComponent />
        <main class="flex-1 p-4">
            <slot></slot>
        </main>
        <FooterComponent />
    </div>
</template>
