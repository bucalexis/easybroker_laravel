<template>
  <v-card
    max-width="100%"
    height="100%"
  >
    <v-img
      height="250"
      :src="item.title_image_full"
      cover
    ></v-img>

    <v-card-item>
      <v-card-title>{{item.title}}</v-card-title>

      <v-card-subtitle>
        <span class="me-1">{{item.property_type}}</span>

        <v-icon color="error" :icon="propertyTypeIcons[item.property_type]" size="small"></v-icon>
      </v-card-subtitle>
    </v-card-item>

    <v-card-text>
      <v-row align="center" class="mx-0">
        <v-rating
          :model-value="4.5"
          color="amber"
          density="compact"
          size="small"
          half-increments
          readonly
        ></v-rating>

        <div class="text-grey ms-4">4.5 (413)</div>
      </v-row>

      <div class="my-4 text-subtitle-1">
        <v-icon 
            color="red"
            icon="mdi-map-marker"
        />
        {{item.location}}
    </div>
    </v-card-text>

    <v-divider class="mx-4 mb-1"></v-divider>

    <v-card-actions>
        <v-btn
            color="deep-purple-lighten-2"
            text="Contactar"
            block
            border
        ></v-btn>
    </v-card-actions>
  </v-card>
</template>

<script>
export default {
    props: {
        item: {
            required: true
        }
    },
    data(){
        return {
            propertyTypeIcons: {
                'Casa' : 'mdi-home',
                'Bodega comercial': 'mdi-warehouse',
                'Terreno': 'mdi-land-fields'
            }
        }
    }
};
</script>
