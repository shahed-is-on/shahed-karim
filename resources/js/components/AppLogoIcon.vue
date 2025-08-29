<script setup lang="ts">
import type { HTMLAttributes } from 'vue';
import logoUrl from '../../../public/assets/img/logo/logo-black.png'; 

defineOptions({
    inheritAttrs: false,
});

interface Props {
    className?: HTMLAttributes['class'];
}

defineProps<Props>();
</script>

<template>
    <img class="app-logo" :src="logoUrl" alt="shahedkarim" />
</template>


<style>
.app-logo {
  width: 120px !important;
}
</style>
