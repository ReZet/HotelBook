<template>
	<form @submit='book' v-if='booking.id == null'>
		<h3>Форма бронирования:</h3>
		<div>
			<div class="form-group">
				<label>First Name:</label>
				<input type='text' v-model='first_name' class="form-control" required />
			</div>
			<div class="form-group">
				<label>Last Name:</label>
				<input type='text' v-model='last_name' class="form-control" required />
			</div>
			<div class="form-group">
				<label>Phone Number:</label>
				<input type='text' v-model='phone_number' class="form-control" required  />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type='email' v-model='email' class="form-control" required />
			</div>
			<div class="form-group">
				<label>Check In:</label>
				<input type='date' v-model='check_in' class="form-control" required />
			</div>
			<div class="form-group">
				<label>Checkout:</label>
				<input type='date' v-model='checkout' class="form-control" required />
			</div>
			<input type='hidden' v-model='hotel_id' />
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Book now</button> 
			</div>
		</div>
	</form>
</template>

<script>
	export default {
		props: ['booking', 'hotel', 'onBook'],
		data: function () {
			return {
				hotel_id: this.hotel.id, 
				first_name: '',
				last_name: '',
				phone_number: '',
				email: '',
				check_in: '',
				checkout: '',
			}
		},
		methods: {
			book (e) {
				this.onBook(e, {
						hotel_id: this.hotel.id,
						first_name: this.first_name,
						last_name: this.last_name,
						phone_number: this.phone_number,
						email: this.email,
						check_in: this.check_in,
						checkout: this.checkout
					});
			}
		}
	}
</script>