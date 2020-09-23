<template>
	<div v-if='booking.id' class="alert alert-success">Забронировано успешно! Ваш номер бронирования: {{ booking.id }}.</div>
</template>

<script>
	export default {
		props: ['booking']
	}
</script>