<template>
    <div>
		<h1>{{ hotel.name }}</h1>
		<div class="row">
			<div class="col">
				<img :src="hotel.image" class="img-thumbnail">
				<p>{{ hotel.location.name }}</p>
				<p>{{ hotel.description }}</p>
			</div>
			<div class="col">
				<booking :hotel="hotel"></booking> 
			</div>
		</div>		
	</div>
</template>
 
<script>
    export default {
        data: function () {
            return {
				hotelId: 0,
                hotel: {
					id: '',
					name: '',
					image: '',
					location: '',
					description: ''
				}
            }
        },
        mounted() {
            var app = this;
			let id = app.$route.params.id;
            app.hotelId = id;
			console.log(app);
			
            axios.get('/api/v1/hotels/' + id)
                .then(function (resp) {
                    app.hotel = resp.data.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load hotels");
                });
        }
    }
</script>