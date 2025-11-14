import axios from 'axios';

// Create an axios instance for admin API
const adminApiClient = axios.create({
  baseURL: 'http://localhost:8001/api', // Using port 8001 for Laravel backend
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
  }
};