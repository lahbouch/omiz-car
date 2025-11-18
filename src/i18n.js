import { createI18n } from 'vue-i18n';
import en from './locales/en.js';
import fr from './locales/fr.js';
import es from './locales/es.js';

const messages = {
  en: en,
  fr: fr,
  es: es
};

// Get locale from localStorage or default to 'en'
const savedLocale = localStorage.getItem('locale') || 'en';

// Update the HTML lang attribute
document.documentElement.setAttribute('lang', savedLocale);

const i18n = createI18n({
  locale: savedLocale, // Default locale from localStorage or 'en'
  fallbackLocale: 'en', // Fallback locale
  messages, // Translations
  legacy: false // Use Composition API mode
});

export default i18n;