<template>
    <MainLayout>
        <Fullstack />
    </MainLayout>
    <AboutLayout />
    <Works />
    <ToolStack />

    <Contact>
        <SocialMedia />
        <Message />
    </Contact>
</template>

<script setup>
import AboutLayout from "../../Layouts/AboutLayout.vue";
import Contact from "../../Layouts/Contact.vue";
import Fullstack from "../../Layouts/Fullstack.vue";
import MainLayout from "../../Layouts/BannerLayout.vue";
import Message from "../../Layouts/contact/Message.vue";
import ToolStack from "../../Layouts/ToolStack.vue";
import SocialMedia from "../../Layouts/contact/SocialMedia.vue";
import Works from "../../Layouts/Works.vue";
</script>
