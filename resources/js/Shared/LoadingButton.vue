<script setup>
defineProps({
  loading: Boolean,
})
</script>
<template>
  <button :disabled="loading" class="flex items-center">
    <div v-if="loading" class="mr-2 btn-spinner" />
    <slot />
  </button>
</template>
