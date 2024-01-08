<script>
import HeaderComponent from './HeaderComponent.vue';
import FooterComponent from './FooterComponent.vue';

export default {
    name: "App.vue",
    components: { 
        HeaderComponent,
        FooterComponent
    },
}
</script>

<template>
    <div>
        <header-component></header-component>
        <router-view></router-view>
        <footer-component></footer-component>
    </div>
</template>