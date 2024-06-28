<template>
  <KinstaLayout>
    <h2 class="text-2xl font-bold py-10">Read our latest articles</h2>
    <section class="space-y-5 border-b-2 pb-10">
      <article v-for="article in articles" :key="article.id" class="flex justify-center items-center shadow-md bg-white rounded-xl p-4 mx-auto max-w-3xl">
        <img :src="logo" class="w-32 h-32 rounded-xl object-cover" alt="Article thumbnail" />
        <div class="flex flex-col text-left justify-between pl-3 space-y-5">
          <h3 class="text-xl font-semibold text-indigo-600 hover:text-indigo-800">
            <Link :href="'/article/' + article.id">{{ article.title }}</Link>
          </h3>
          <p>{{ article.excerpt }}</p>
          <Link :href="'/article/' + article.id" class="text-indigo-600 hover:text-indigo-800 w-fit self-end font-semibold">Read more</Link>
        </div>
      </article>
    </section>
  </KinstaLayout>
</template>

<script setup>
import { defineProps } from 'vue';
import KinstaLayout from '../Layouts/KinstaLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
import logo from '../assets/kinsta-logo.svg';

defineProps({
  articles: Array,
});
</script>
