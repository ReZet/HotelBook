<template>
	<div v-if='isError' class="alert alert-danger">Ошибка бронирования!</div>
</template>

<script>
	export default {
		props: ['isError']
	}
</script>