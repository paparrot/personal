<script setup>

</script>

<template>
    <!-- Hero -->
    <div class="max-w-[85rem] mx-auto py-4 md:py-10 px-4 sm:px-6 lg:px-8">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 xl:gap-20 md:items-center">
            <div>
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
                    Hey there! 👋
                </h1>
                <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">
                    I'm Klim, full-stack web developer based in Montenegro 🇲🇪
                </p>

                <!-- Buttons -->
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                    <a href="https://resume.io/r/4NDzGnXeo" target="_blank" rel="noreferrer noopener" class="inline-flex justify-center items-center gap-x-3 text-center bg-primary-500 hover:bg-primary-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                        Resume
                    </a>
                    <a href="mailto:subbotin.klim@gmail.com" class="inline-flex justify-center items-center gap-x-3.5 text-sm lg:text-base text-center border hover:border-gray-300 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800">
                        Contact me
                    </a>
                </div>
                <!-- End Buttons -->
            </div>
            <!-- End Col -->

            <div class="order-first md:order-last relative ml-4">
                <img class="w-full rounded-md" src="@/../images/hero.jpg" alt="My photo">
                <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 mr-4 -ml-4 lg:mt-6 lg:-mb-6 lg:mr-6 lg:-ml-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0"></div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Hero -->
</template>

<style scoped>

</style>
