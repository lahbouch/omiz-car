<template>
  <form @submit.prevent="handleSubmit" class="booking-form">
    <!-- Car Information Section -->
    <div v-if="carInfo" class="car-info-section">
      <h3>Informations sur le véhicule</h3>
      <div class="car-details">
        <div class="car-image">
          <img :src="carInfo.image" :alt="carInfo.name" class="img-fluid" />
        </div>
        <div class="car-specs">
          <h4>{{ carInfo.name }}</h4>
          <p><strong>Catégorie:</strong> {{ carInfo.category }}</p>
          <p><strong>Transmission:</strong> {{ carInfo.transmission }}</p>
          <p><strong>Carburant:</strong> {{ carInfo.fuelType }}</p>
          <p><strong>Année:</strong> {{ carInfo.year }}</p>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="lastname" class="form-label">Nom *</label>
      <input
        id="lastname"
        v-model="formData.lastname"
        type="text"
        class="form-input"
        :class="{ error: errors.lastname }"
        :aria-invalid="errors.lastname ? 'true' : 'false'"
        required
      />
      <div v-if="errors.lastname" class="error-message" role="alert">
        {{ errors.lastname }}
      </div>
    </div>

    <div class="form-group">
      <label for="firstname" class="form-label">Prénom *</label>
      <input
        id="firstname"
        v-model="formData.firstname"
        type="text"
        class="form-input"
        :class="{ error: errors.firstname }"
        :aria-invalid="errors.firstname ? 'true' : 'false'"
        required
      />
      <div v-if="errors.firstname" class="error-message" role="alert">
        {{ errors.firstname }}
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="startDate" class="form-label">Date de début *</label>
        <input
          id="startDate"
          v-model="formData.startDate"
          type="date"
          class="form-input"
          :class="{ error: errors.startDate }"
          :aria-invalid="errors.startDate ? 'true' : 'false'"
          required
        />
        <div v-if="errors.startDate" class="error-message" role="alert">
          {{ errors.startDate }}
        </div>
      </div>

      <div class="form-group">
        <label for="endDate" class="form-label">Date de fin *</label>
        <input
          id="endDate"
          v-model="formData.endDate"
          type="date"
          class="form-input"
          :class="{ error: errors.endDate }"
          :aria-invalid="errors.endDate ? 'true' : 'false'"
          required
        />
        <div v-if="errors.endDate" class="error-message" role="alert">
          {{ errors.endDate }}
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="notes" class="form-label">Remarques</label>
      <textarea
        id="notes"
        v-model="formData.notes"
        rows="4"
        class="form-textarea"
      ></textarea>
    </div>

    <div v-if="submitError" class="error-message" role="alert">
      {{ submitError }}
    </div>

    <button type="submit" class="submit-button">Réserver via WhatsApp</button>
  </form>
</template>

<script setup>
import { ref, reactive, computed } from "vue";

// Props
const props = defineProps({
  whatsappNumber: {
    type: String,
    default: "212618181155",
  },
  carInfo: {
    type: Object,
    default: null,
  },
});

// Emits
const emit = defineEmits(["booking-sent"]);

// Form data
const formData = reactive({
  lastname: "",
  firstname: "",
  startDate: "",
  endDate: "",
  notes: "",
});

// Errors
const errors = reactive({
  lastname: "",
  firstname: "",
  startDate: "",
  endDate: "",
});

const submitError = ref("");

// Utility function to format date as DD/MM/YYYY
const formatDate = (dateString) => {
  if (!dateString) return "";
  const date = new Date(dateString);
  const day = String(date.getDate()).padStart(2, "0");
  const month = String(date.getMonth() + 1).padStart(2, "0");
  const year = date.getFullYear();
  return `${day}/${month}/${year}`;
};

// Validation function
const validateForm = () => {
  // Reset errors
  Object.keys(errors).forEach((key) => {
    errors[key] = "";
  });
  submitError.value = "";

  let isValid = true;

  // Check required fields
  if (!formData.lastname.trim()) {
    errors.lastname = "Le nom est requis.";
    isValid = false;
  }

  if (!formData.firstname.trim()) {
    errors.firstname = "Le prénom est requis.";
    isValid = false;
  }

  if (!formData.startDate) {
    errors.startDate = "La date de début est requise.";
    isValid = false;
  }

  if (!formData.endDate) {
    errors.endDate = "La date de fin est requise.";
    isValid = false;
  }

  // Check date logic
  if (formData.startDate && formData.endDate) {
    const start = new Date(formData.startDate);
    const end = new Date(formData.endDate);

    if (start > end) {
      errors.endDate =
        "La date de fin doit être postérieure ou égale à la date de début.";
      isValid = false;
    }
  }

  return isValid;
};

// Handle form submission
const handleSubmit = () => {
  if (!validateForm()) return;

  try {
    // Build the message
    let message = `Réservation\n`;
    message += `Nom : ${formData.lastname}\n`;
    message += `Prénom : ${formData.firstname}\n`;
    message += `Date de début : ${formatDate(formData.startDate)}\n`;
    message += `Date de fin : ${formatDate(formData.endDate)}\n`;

    if (formData.notes.trim()) {
      message += `Remarques : ${formData.notes}`;
    }

    // Add car information if available
    if (props.carInfo) {
      message += `\n\nVéhicule réservé :\n`;
      message += `Modèle : ${props.carInfo.name}\n`;
      message += `Catégorie : ${props.carInfo.category}\n`;
      message += `Transmission : ${props.carInfo.transmission}\n`;
      message += `Carburant : ${props.carInfo.fuelType}\n`;
      message += `Année : ${props.carInfo.year}`;
    }

    // Encode the message
    const encodedMessage = encodeURIComponent(message);

    // Build WhatsApp URL
    const whatsappUrl = `https://api.whatsapp.com/send?phone=${props.whatsappNumber}&text=${encodedMessage}`;

    // Emit event before opening WhatsApp
    emit("booking-sent", {
      lastname: formData.lastname,
      firstname: formData.firstname,
      startDate: formData.startDate,
      endDate: formData.endDate,
      notes: formData.notes,
      carInfo: props.carInfo,
    });

    // Open WhatsApp in a new tab/window
    const newWindow = window.open(whatsappUrl, "_blank");

    // If opening failed, show error
    if (
      !newWindow ||
      newWindow.closed ||
      typeof newWindow.closed === "undefined"
    ) {
      submitError.value =
        "Impossible d'ouvrir WhatsApp. Veuillez vérifier que WhatsApp est installé sur votre appareil.";
    }
  } catch (error) {
    submitError.value =
      "Une erreur est survenue lors de l'envoi de la réservation.";
    console.error("Booking error:", error);
  }
};
</script>

<style scoped>
/* 
  Uncomment the following line if using Tailwind CSS:
  @import 'tailwindcss/base'; 
  @import 'tailwindcss/components'; 
  @import 'tailwindcss/utilities';
*/

.booking-form {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  font-family: Arial, sans-serif;
}

.car-info-section {
  background-color: #f8f9fa;
  border-radius: 8px;
  padding: 20px;
  margin-bottom: 20px;
}

.car-info-section h3 {
  margin-top: 0;
  color: #333;
  border-bottom: 1px solid #dee2e6;
  padding-bottom: 10px;
}

.car-details {
  display: flex;
  gap: 20px;
  align-items: center;
}

.car-image img {
  max-width: 150px;
  border-radius: 8px;
}

.car-specs h4 {
  margin-top: 0;
  margin-bottom: 10px;
}

.car-specs p {
  margin: 5px 0;
}

.form-group {
  margin-bottom: 20px;
}

.form-row {
  display: flex;
  gap: 15px;
}

.form-row .form-group {
  flex: 1;
}

.form-label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #333;
}

.form-input,
.form-textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 16px;
  box-sizing: border-box;
}

.form-input:focus,
.form-textarea:focus {
  outline: none;
  border-color: #007bff;
  box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
}

.form-input.error {
  border-color: #dc3545;
}

.error-message {
  color: #dc3545;
  font-size: 14px;
  margin-top: 5px;
}

.submit-button {
  background-color: #28a745;
  color: white;
  border: none;
  padding: 12px 20px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  font-weight: bold;
}

.submit-button:hover {
  background-color: #218838;
}

.submit-button:active {
  background-color: #1e7e34;
}

/* Responsive styles */
@media (max-width: 768px) {
  .form-row {
    flex-direction: column;
    gap: 0;
  }

  .booking-form {
    padding: 15px;
  }

  .car-details {
    flex-direction: column;
    text-align: center;
  }

  .car-image img {
    max-width: 100px;
  }
}
</style>

<!--
TESTING INSTRUCTIONS:
1. Desktop testing:
   - Copy this component to your Vue 3 project
   - Import and use it in a parent component
   - Fill in the form and click "Réserver via WhatsApp"
   - A new tab should open with WhatsApp Web pre-filled with the message

2. Mobile testing:
   - Serve your app on a mobile device or use mobile emulator
   - Click "Réserver via WhatsApp"
   - The WhatsApp app should open with the pre-filled message

3. Changing WhatsApp number:
   - Use the component with a prop: <BookingForm whatsappNumber="YOUR_NUMBER" />
   - Example: <BookingForm whatsappNumber="212600000000" />

4. Listening for booking event:
   - Use the component with an event listener: <BookingForm @booking-sent="handleBooking" />
   - The handleBooking function will receive the booking data
-->
