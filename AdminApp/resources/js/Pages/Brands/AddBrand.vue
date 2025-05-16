<script setup>
import { onMounted, computed } from 'vue';
import Layout from '../Shared/Layout.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';
import { useToast } from 'vue-toastification';

const toast = useToast();
const flash = computed(() => usePage().props.flash);

const props = defineProps({
    brands: Object
});


const deleteBrand = () => {

};
</script>

<template>
    <Layout>
       <main class="ml-64 p-8">
    <h2 class="text-2xl font-bold mb-6">Add Brand</h2>
    <form class="bg-white shadow-md rounded-lg p-6">
      <div class="mb-4">
        <label for="brand-name" class="block text-gray-700 font-bold mb-2">Name</label>
        <input type="text" id="brand-name" class="w-full p-2 border rounded-md" placeholder="Enter brand name" required>
      </div>
      <div class="mb-4">
        <label for="brand-image" class="block text-gray-700 font-bold mb-2">Image</label>
        <input type="file" id="brand-image" class="w-full p-2 border rounded-md" required>
      </div>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Brand</button>
    </form>
  </main>
    </Layout>
</template>

<style></style>