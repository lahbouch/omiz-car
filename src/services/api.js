import axios from 'axios';

// Create an axios instance
const apiClient = axios.create({
  baseURL: 'http://localhost:8000/api',
  withCredentials: false,
  headers: {
    Accept: 'application/json',
    'Content-Type': 'application/json'
  }
});

export default {
  // Car endpoints
  getCars() {
    return apiClient.get('/cars');
  },
  
  getAvailableCars() {
    return apiClient.get('/cars/available');
  },
  
  getCar(id) {
    return apiClient.get(`/cars/${id}`);
  },
  
  createCar(car) {
    return apiClient.post('/cars', car);
  },
  
  updateCar(id, car) {
    return apiClient.put(`/cars/${id}`, car);
  },
  
  deleteCar(id) {
    return apiClient.delete(`/cars/${id}`);
  },
  
  // Booking endpoints
  getBookings() {
    return apiClient.get('/bookings');
  },
  
  getBooking(id) {
    return apiClient.get(`/bookings/${id}`);
  },
  
  createBooking(booking) {
    return apiClient.post('/bookings', booking);
  },
  
  updateBooking(id, booking) {
    return apiClient.put(`/bookings/${id}`, booking);
  },
  
  deleteBooking(id) {
    return apiClient.delete(`/bookings/${id}`);
  }
};