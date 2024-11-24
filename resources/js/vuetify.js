// Vuetify
import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";
import { aliases, mdi } from 'vuetify/iconsets/mdi'
import "@mdi/font/css/materialdesignicons.css";
const customeTheme = {

};

const vuetify = createVuetify({
    components,
    directives,
    theme: {
        defaultTheme: "customeTheme",
        themes: {
            customeTheme,
        },
    },
    icons: {
        defaultSet: 'mdi',
        aliases,
        sets: {
          mdi,
        },
      },
});

export default vuetify;