import axios from 'axios';

// Create an axios instance for API calls
const apiClient = axios.create({
  baseURL: 'http://localhost:8000/api',
  headers: {
    'Content-Type': 'application/json',
  },
});

// Add a request interceptor to handle CORS
apiClient.interceptors.request.use(
  config => {
    // Add CORS headers
    config.headers['Access-Control-Allow-Origin'] = '*';
    config.headers['Access-Control-Allow-Methods'] = 'GET, POST, PUT, DELETE, OPTIONS';
    config.headers['Access-Control-Allow-Headers'] = 'Origin, Content-Type, X-Auth-Token';
    return config;
  },
  error => {
    return Promise.reject(error);
  }
);

// Add a response interceptor to handle errors
apiClient.interceptors.response.use(
  response => {
    return response;
  },
  error => {
    console.error('API Error:', error);
    return Promise.reject(error);
  }
);

// API service for frontend
export default {
  // Car endpoints
  getCars() {
    return apiClient.get('/cars');
  },
  
  getCar(id) {
    return apiClient.get(`/cars/${id}`);
  },
  
  // Contact message endpoints
  createContactMessage(contactData) {
    return apiClient.post('/contact-messages', contactData);
  },
  
  getContactMessages() {
    return apiClient.get('/contact-messages');
  },
};