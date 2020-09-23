<template>
	<div>
		<bookingError :isError='isError' />
		<bookingForm :hotel="hotel" :booking='booking' :onBook="onBookMethod"></bookingForm>
		<bookingSuccess :booking='booking' />
	</div>
</template>

<script>
	export default {
		props: ['hotel'],
		data: function () {
			return {
				isError: false,
				isSuccess: false,
				booking: {
					id: null,
					hotel_id: this.hotel.id,
					first_name: '',
					last_name: '',
					phone_number: '',
					email: '',
					check_in: '',
					checkout: '',
				}
			}
		},
		mounted: () => { 
			//console.log(this.hotel);
		},
		methods: {
			onBookMethod (e, data) {
				const newBook = {
					hotel_id: data.hotel_id,
					first_name: data.first_name,
					last_name: data.last_name,
					phone_number: data.phone_number,
					email: data.email,
					check_in: data.check_in,
					checkout: data.checkout
				};
				
				var app = this;
				app.isError = false;

				axios.post('/api/v1/bookings', newBook)
						.then(function (resp) {
							app.booking = resp.data;
						})
						.catch(function (resp) {
							app.isError = true;
						});
						
				e.preventDefault();
			}				
		} 
	}
</script>