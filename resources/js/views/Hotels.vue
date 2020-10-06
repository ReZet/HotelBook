<template>
	<div>
		<div class="row">
			<div v-for="hotel, index in hotels" class="col">
				<div class="card" style="width: 18rem;">
					<router-link :to="{name: 'Hotel', params: {id: hotel.id}}">
						<img :src="hotel.image" class="card-img-top" title="" alt="" />
					</router-link>
					<div class="card-body">
						<h3 class="card-title">{{ hotel.name }}</h3>
						<p class="card-text">{{ hotel.location.name }}</p>
						<router-link :to="{name: 'Hotel', params: {id: hotel.id}}" class="btn btn-primary">
							Подробнее
						</router-link>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
 
<script>
    export default {
        data: function () {
            return {
                hotels: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/v1/hotels')
                .then(function (resp) {
                    app.hotels = resp.data.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load hotels");
                });
        }
    }
</script>