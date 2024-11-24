<template>
    <v-row >

        <template v-if="waitingServer">
            <v-col  v-for="i in 9" :key="i"  cols="12" sm="6" md="6" lg="4" xl="3">
                <v-skeleton-loader type="image, article"></v-skeleton-loader>
            </v-col>
        </template>

        <v-col v-else v-for="property in properties" :key="property.public_id" cols="12" sm="6" md="6" lg="4" xl="3">
            <Property :item="property" />
        </v-col>
    </v-row>
</template>

<script>
    import Property from './Property.vue';
    export default {
        components: {
            Property
        },
        data(){
            return {
                properties: [],
                waitingServer: false
            }
        },
        methods: {
            getProperties(){
                this.waitingServer = true;
                axios.get('/api/properties')
                .then(response => {
                    this.properties = response.data.data;
                }).finally(() => {
                    this.waitingServer = false;
                })
            }
        },

        mounted(){
            this.getProperties();
        }
    };

</script>
