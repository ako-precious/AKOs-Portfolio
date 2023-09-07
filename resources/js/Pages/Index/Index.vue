<template>
    <MainLayout>
        <Fullstack/>
    </MainLayout>
    <AboutLayout/>
    <Works/>
    <ToolStack/>

    <Contact>
        <SocialMedia/>
        <Message/>
    </Contact>
</template>

<script setup>
import MainLayout  from "../../Layouts/BannerLayout.vue";
import Fullstack  from "../../Layouts/Fullstack.vue";
import AboutLayout  from "../../Layouts/AboutLayout.vue";
import Works from "../../Layouts/Works.vue";
import Contact from "../../Layouts/Contact.vue";
import ToolStack from "../../Layouts/ToolStack.vue";
import Message from "../../Layouts/contact/Message.vue";
import SocialMedia from "../../Layouts/contact/SocialMedia.vue";

</script>
