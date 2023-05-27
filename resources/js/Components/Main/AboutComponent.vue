<script setup>
import "@/../images/about.jpg"
</script>

<template>
    <!-- Features -->
    <section id="about" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="relative">
            <img class="relative object-cover rounded-xl brightness-50 aspect-[16/9] sm:aspect-[21/6]" src="@/../images/about.jpg" alt="">
            <h2 class="absolute top-1/2 left-1/2 text-white z-10 text-4xl font-bold -translate-y-1/2 -translate-x-1/2">About</h2>
        </div>

        <!-- Grid -->
        <div class="mt-5 lg:mt-16 grid lg:grid-cols-3 gap-8 lg:gap-12">
            <div class="lg:col-span-1">
                <h2 class="font-bold text-2xl md:text-3xl text-gray-800 dark:text-gray-200">
                    Who am I?
                </h2>
                <p class="mt-2 md:mt-4 text-gray-500">
                    I'm a full-stack web developer with strong experience.
                    For the last three years, I working on a multinational web platform for e-commerce and also creating small projects for the business.
                </p>
            </div>

            <div class="lg:col-span-2">
                <div class="grid sm:grid-cols-2 gap-8 md:gap-12">
                    <!-- Icon Block -->
                    <div class="flex gap-x-5">
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                Strong knowledge
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Confident theoretical knowledge and practical experience in web application development
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5">
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                Modern technologies stack
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                I use only modern and of course stable technologies that recommend themselves as useful
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5">
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                Attentive to details
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                I am interested in doing the work efficiently, and not to redo it
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5">
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                Always available
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Always available to clarify details and make edits
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </section>
    <!-- End Features -->
</template>

<style scoped>

</style>
