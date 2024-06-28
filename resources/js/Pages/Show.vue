<template>
  <KinstaLayout>
    <article class="mx-auto mt-10 flex justify-center max-w-5xl border-b-2">
      <img :src="logo" class="w-80 h-80 rounded-xl mx-auto py-5" alt="Article thumbnail" />
      <div class="text-left flex flex-col pt-5 pb-10 px-10">
        <h1 class="text-xl font-semibold mb-10">{{ article.title }}</h1>
        <p>{{ article.body }}</p>
      </div>
    </article>
  </KinstaLayout>
</template>

<script setup>
import { defineProps } from 'vue';
import KinstaLayout from '../Layouts/KinstaLayout.vue';
import logo from '../assets/kinsta-logo.svg';

defineProps({
  article: Object,
});
</script>
