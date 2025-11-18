<template>
  <div class="nav-item dropdown has-arrow flag-nav nav-item-box">
    <a
      class="nav-link dropdown-toggle"
      data-bs-toggle="dropdown"
      href="javascript:void(0);"
      role="button"
    >
      <img :src="currentFlag" alt="Language" class="img-fluid flag-icon" />
    </a>
    <ul class="dropdown-menu p-2">
      <li>
        <a
          href="javascript:void(0);"
          class="dropdown-item"
          @click="switchLanguage('en')"
        >
          <img
            src="@/assets/admin/img/flags/gb.svg"
            alt=""
            class="flag-icon"
          />English
        </a>
      </li>
      <li>
        <a
          href="javascript:void(0);"
          class="dropdown-item"
          @click="switchLanguage('fr')"
        >
          <img
            src="@/assets/admin/img/flags/france.svg"
            alt=""
            class="flag-icon"
          />Français
        </a>
      </li>
      <li>
        <a
          href="javascript:void(0);"
          class="dropdown-item"
          @click="switchLanguage('es')"
        >
          <img
            src="@/assets/admin/img/flags/es.png"
            alt=""
            class="flag-icon"
          />Español
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
import { ref, computed } from "vue";
import { useI18n } from "vue-i18n";
import flagEn from "@/assets/admin/img/flags/gb.svg";
import flagFr from "@/assets/admin/img/flags/france.svg";
import flagEs from "@/assets/admin/img/flags/es.png";

export default {
  name: "LanguageSwitcher",
  setup() {
    const { locale } = useI18n();

    const languages = {
      en: { name: "English", flag: flagEn },
      fr: { name: "Français", flag: flagFr },
      es: { name: "Español", flag: flagEs },
    };

    const currentLanguage = ref(locale.value || "en");

    const currentFlag = computed(() => {
      return languages[currentLanguage.value]?.flag || languages.en.flag;
    });

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
      currentFlag,
      switchLanguage,
    };
  },
};
</script>

<style scoped>
.flag-icon {
  border-radius: 50%;
  object-fit: cover;
  width: 20px;
  height: 20px;
  display: inline-block;
  vertical-align: middle;
}

.dropdown-item img.flag-icon {
  width: 16px;
  height: 16px;
  margin-right: 8px;
}
</style>
