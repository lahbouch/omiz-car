<template>
  <div class="language-select">
    <select
      class="form-select"
      @change="switchLanguage($event.target.value)"
      :value="currentLanguage"
    >
      <option value="en">English</option>
      <option value="fr">Français</option>
      <option value="es">Español</option>
    </select>
  </div>
</template>

<script>
import { ref, computed } from "vue";
import { useI18n } from "vue-i18n";

export default {
  name: "LanguageSwitcher",
  setup() {
    const { locale } = useI18n();

    const languages = {
      en: { name: "English" },
      fr: { name: "Français" },
      es: { name: "Español" },
    };

    const currentLanguage = ref(locale.value || "en");

    const switchLanguage = (lang) => {
      currentLanguage.value = lang;
      locale.value = lang;
      localStorage.setItem("locale", lang);

      // Update the HTML lang attribute
      document.documentElement.setAttribute("lang", lang);

      // Reload the page to apply the new language
      window.location.reload();
    };

    return {
      currentLanguage,
      switchLanguage,
    };
  },
};
</script>
