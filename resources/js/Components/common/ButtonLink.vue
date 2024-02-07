<template>
    <router-link :class="classname" :to="link">{{ text }}</router-link>
</template>

<script>
export default {
  props: ['text', 'classname', 'link']
}
</script>
