<template>
    <v-layout class="rounded rounded-md">
        <v-app-bar color="primary" title="EasyBroker Properties"></v-app-bar>
        <v-main class="d-flex align-center justify-center bg-grey-lighten-4" style="min-height: 300px;">
              <v-container >
                <PropertyManager />
            </v-container>

        </v-main>

  </v-layout>
</template>

<script>
import PropertyManager from '../components/PropertyManager.vue'
export default {
    components: {
        PropertyManager,
    },
    setup() {
        
    },
}
</script>