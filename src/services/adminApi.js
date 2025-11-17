import axios from 'axios';

// Create an axios instance for admin API
const adminApiClient = axios.create({
  baseURL: 'http://localhost:8001/api', // Updated to port 8001 for Laravel backend
  withCredentials: false,
  headers: {
    Accept: 'application/json',
    'Content-Type': 'application/json'
  }
});

// Add a request interceptor to include the auth token
adminApiClient.interceptors.request.use(
  config => {
    const token = localStorage.getItem('adminToken');
    if (token) {
      config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
  },
  error => {
    return Promise.reject(error);
  }
);

// Add a response interceptor to handle token expiration
adminApiClient.interceptors.response.use(
  response => {
    return response;
  },
  error => {
    if (error.response && error.response.status === 401) {
      // Token expired or invalid, remove it from localStorage
      localStorage.removeItem('adminToken');
      // Redirect to login page
      window.location.href = '/admin-template/login';
    }
    return Promise.reject(error);
  }
);

// Create a separate axios instance for file uploads (multipart/form-data)
const fileUploadClient = axios.create({
  baseURL: 'http://localhost:8001/api',  // Updated to port 8001
  withCredentials: false,
  headers: {
    'Content-Type': 'multipart/form-data'
  }
});

// Add auth token to file upload requests
fileUploadClient.interceptors.request.use(
  config => {
    const token = localStorage.getItem('adminToken');
    if (token) {
      config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
  },
  error => {
    return Promise.reject(error);
  }
);

export default {
  // Authentication endpoints
  login(credentials) {
    return adminApiClient.post('/admin/login', credentials);
  },
  
  logout() {
    return adminApiClient.post('/admin/logout');
  },
  
  // Car endpoints
  getCars() {
    return adminApiClient.get('/cars');
  },
  
  getCar(id) {
    return adminApiClient.get(`/cars/${id}`);
  },
  
  createCar(car) {
    return adminApiClient.post('/cars', car);
  },
  
  updateCar(id, car) {
    return adminApiClient.put(`/cars/${id}`, car);
  },
  
  deleteCar(id) {
    return adminApiClient.delete(`/cars/${id}`);
  },
  
  // Car image upload endpoints
  uploadCarImage(imageFile) {
    const formData = new FormData();
    formData.append('image', imageFile);
    return fileUploadClient.post('/upload/car-image', formData);
  },
  
  uploadCarImages(imageFiles) {
    const formData = new FormData();
    imageFiles.forEach(file => {
      formData.append('images[]', file);
    });
    return fileUploadClient.post('/upload/car-images', formData);
  },
  
  // Booking endpoints
  getBookings() {
    return adminApiClient.get('/bookings');
  },
  
  getBooking(id) {
    return adminApiClient.get(`/bookings/${id}`);
  },
  
  createBooking(booking) {
    return adminApiClient.post('/bookings', booking);
  },
  
  updateBooking(id, booking) {
    return adminApiClient.put(`/bookings/${id}`, booking);
  },
  
  deleteBooking(id) {
    return adminApiClient.delete(`/bookings/${id}`);
  },
  
  // Reservation endpoints (for frontend bookings)
  getReservations() {
    return adminApiClient.get('/reservations');
  },
  
  getReservation(id) {
    return adminApiClient.get(`/reservations/${id}`);
  },
  
  createReservation(reservation) {
    return adminApiClient.post('/reservations', reservation);
  },
  
  updateReservation(id, reservation) {
    return adminApiClient.put(`/reservations/${id}`, reservation);
  },
  
  deleteReservation(id) {
    return adminApiClient.delete(`/reservations/${id}`);
  },
  
  // Contact message endpoints
  getContactMessages() {
    return adminApiClient.get('/contact-messages');
  },
  
  getContactMessage(id) {
    return adminApiClient.get(`/contact-messages/${id}`);
  },
  
  deleteContactMessage(id) {
    return adminApiClient.delete(`/contact-messages/${id}`);
  }
};