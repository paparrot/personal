<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import HeroComponent from "@/Components/Main/HeroComponent.vue";
import AboutComponent from "@/Components/Main/AboutComponent.vue";
import StackComponent from "@/Components/Main/StackComponent.vue";
import ProjectListComponent from "@/Components/Main/ProjectListComponent.vue";
</script>

<template>
    <Head title="Welcome" />
    <MainLayout>
        <HeroComponent />
        <AboutComponent/>
        <StackComponent/>
        <ProjectListComponent />
    </MainLayout>
</template>

<style>
</style>
