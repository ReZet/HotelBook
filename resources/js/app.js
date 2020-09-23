require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'


import App from './views/App'
import Home from './views/Home'
import Hotels from './views/Hotels'
import Hotel from './views/Hotel'
import HotelsPage from './views/HotelsPage'
import HotelPage from './views/HotelPage'
import Booking from './views/Booking'
import BookingForm from './views/BookingForm'
import BookingSuccess from './views/BookingSuccess'
import BookingError from './views/BookingError'

Vue.use(VueRouter)
Vue.component('hotels', Hotels);
Vue.component('hotel', Hotel);
Vue.component('booking', Booking);
Vue.component('bookingForm', BookingForm);
Vue.component('bookingSuccess', BookingSuccess);
Vue.component('BookingError', BookingError);

const router = new VueRouter({
	mode: 'history',
		routes: [
		{
			path: '/',
			name: 'home',
			component: Home
		},
		{
			path: '/hotels',
			name: 'Hotels',
			component: HotelsPage,
		},
		{
			path: '/hotels/:id',
			name: 'Hotel',
			component: HotelPage,
		},
	],
});

const app = new Vue({
	el: '#app',
	components: { App },
	router
});